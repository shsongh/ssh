{\rtf1\ansi\ansicpg949\deff0\nouicompat\deflang1033\deflangfe1042{\fonttbl{\f0\fnil\fcharset129 \'b8\'bc\'c0\'ba \'b0\'ed\'b5\'f1;}}
{\*\generator Riched20 10.0.18362}\viewkind4\uc1 
\pard\sa200\sl276\slmult1\f0\fs20\lang18 <html>\par
<head>\par
\tab <title>\'b3\'eb\'b7\'a1 \'ba\'b8\'b1\'e2 </html>\par
\tab <meta charset="utf-8"/>\par
</head>\par
<body>\par
<?php  \par
\tab $dbc=mysqli_connect("127.0.0.1', 'root', 'apmsetup', 'mysong') \par
\tab\tab or die("Error Connecting to mySQL Server");\par
\tab mysqli_querry($dbc, "set names utf8");\par
\tab $querry = 'select * from song';\par
\tab $result = mysqli_querry($dbc, $querry) \par
\tab\tab or die ("Error Q\tab uerrying db");\par
\tab echo "\'b3\'eb\'b7\'a1\'c1\'a6\'b8\'f1";\par
\tab mysqli_close($dbc);\par
</body>\par
</html>\par
}
 