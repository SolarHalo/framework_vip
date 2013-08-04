<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title> not goog</title>
</head>
<body>
 hello {{$a}},
 {{$temp}}
 
{{foreach $tasks as $task}}
 {{$task->CONTENT}} <br/>
{{/foreach}}
</body>
</html>