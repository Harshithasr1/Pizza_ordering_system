#!/usr/bin/perl

use strict;
use warnings;

# Set environment variables
$ENV{'ORACLE_HOME'} = '/usr/lib/oracle/21/client64';
$ENV{'ORACLE_SID'} = 'csdbora';

# Get the submitted form data from the environment variable
my $query_string = $ENV{'QUERY_STRING'};
my @search_terms;
foreach my $pair (split /&/, $query_string) {
    my ($name, $value) = split /=/, $pair;
    if ($name eq 'empname') {
        push @search_terms, { type => 'n', term => $value };
    } elsif ($name eq 'salary') {
        push @search_terms, { type => 's', term => $value };
    }
}

# Generate the response
print "Content-type: text/html\n\n";
print <<END_HTML;
<html>
<head>
    <title>Question-2</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <style>
        body {
            font-family: Verdona;
	    font-size: 18px;
        }
        
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
            margin-bottom: 20px;
	        margin: 0 auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #dd4151d5;
            color: white;
        }
	
	    label {
            font-family: Verdona;
	        font-size: 20px;
        }

        input[type="submit"] {
			display: block;
			margin: 20px auto 0;
			padding: 10px 20px;
			font-size: 14px;
			font-weight: bold;
			color: #FFF;
			background-color: #009272;
			border-radius: 5px;
			cursor: pointer;
		}
        
        input[type="submit"]:hover {
            background-color: #006C5E;
        }
	
        input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.5);
        }

        .form-group {
            padding: 10px 20px;
            margin-top: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            width: 300px;
        }

        h4{
            text-align:center;
        }
	
	    p{
            text-align:center;
        }

        .wrapper{
            width: 480px;
	        margin: 0 auto;
            background: #e4c6f7;
            padding: 20px;
            box-shadow: 0px 0px 10px rgb(201, 188, 243);
        }

	    #empname {
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
        }

	    #salary {
            border: 1px solid #ccc;
	    width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        #search_name,
        #search_salary {
            display: none;
        }
    </style>
</head>
<body>

<h1 style="text-align:center">Assignment-2</h1>
<h2 style="text-align:center">Search for Employee details!</h2>
<div class = "wrapper">
    <div class="form-group">
        <label>Select a search option below:</label><br>
        <input type="radio" name="val" value="name" onclick="myDiv()"> Based on Employee name<br>
        <input type="radio" name="val" value="salary" onclick="myDiv()"> Based on Salary<br>
    </div>
    <div id="search_name">
        <form action="ques2.cgi" method="GET">
            <div class="form-group">
                <label>Enter the Employee fullname or part of the name:</label><br>
                <input type="text" id="empname" value="" class="form-control" name="empname">
            </div>
            <input type="submit" value="Search">
        </form>
    </div>
    <div id="search_salary">
        <form action="ques2.cgi" method="GET">
            <div class="form-group">
                <label>Enter a salary value:</label><br>
                <input type="number" id="salary" value="" class="form-control" name="salary">
            </div>
            <input type="submit" value="Search">
        </form>
    </div>
</div>
<script>
      function myDiv() {
        var selectedValue = document.querySelector('input[name="val"]:checked').value;
            if (selectedValue === 'name') {
                document.getElementById('search_name').style.display = 'block';
                document.getElementById('search_salary').style.display = 'none';
            } else if (selectedValue === 'salary') {
                document.getElementById('search_salary').style.display = 'block';
                document.getElementById('search_name').style.display = 'none';
            }
        }
    </script>
</body>
</html>
END_HTML


if (@search_terms) {
    # Run the database query and display the results for each search term
    for my $search (@search_terms) {
        my $command = '/home/jrm512/public_html/demo/proc/unix-version/c++/sample3';
        my $output = `$command $search->{type} $search->{term}`;
        my @rows = split /\n/, $output;

        if (@rows) {
            my ($search_label, $search_value) = $search->{type} eq 'n'
                ? ('Employee Name', $search->{term}) : ('Employee Salary', '$' . $search->{term});

            print "<h4>Displaying results for '$search_label' Search - $search_value</h4>";
            print "<table>\n<tr><th>Employee Name</th><th>Department Name</th><th>Salary</th>";
            if ($search->{type} eq 'n') {
                print "<th>Commission</th>";
            }
            print "</tr>\n";
            for my $row (@rows) {
                my ($name, $dept, $salary, $commission) = split /,/, $row;
                print "<tr><td>$name</td><td>$dept</td><td>\$$salary</td>";
                if ($search->{type} eq 'n') {
                    print "<td>\$$commission</td>";
                }
                print "</tr>\n";
            }
            print "</table>\n";
        } else {
            print "<p>No results found for '$search->{type}' search type of: $search->{term}</p>";
        }
    }
} else {
    print "<p>No data submitted.</p>";
}
