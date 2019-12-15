<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 

<html>

<head>

<title>CREEDO'S GUNBOUND CRAP</title>

<style type="text/css">

body { margin: 0; padding: 10px; background: #eef; color: #006; font: normal 1em/1.4em Arial, Tahoma, Helvetic, sans-serif; }

a { color: #0cc; font-weight: bold; text-decoration: none; }
a:hover { color: #f00; background: #ffe; }

h1 { color: #00f; font: bold 2.0em/2.2em; }

blockquote { width: 90%; text-align: justify; margin: 2ex; 1em; }

img { margin: 10px 0px; }

</style>

</head>

<body> install the versions of gunbound you want to use in different folders.<br>
Example:<br>
C:\Program files\softnyx\ ----> GIS<br>
C:\Program files\softnyx2\ ----> GLS<br>
<br>
After installing one version, run it and let it update. I advise you log in gunbound to update nprotect too, cause I'm not sure if nprotect affects registry settings.<br>
Ok, log out and proceed like this.<br>
Start menu>execute>regedit<br>
Now, in regedit:<br>
HKEY_LOCAL_MACHINE > SOFTWARE > SoftNyx > Gunbound<br>
Choose the folder gunbound and click File > export, on the top menu. Choose any name and place and save it.<br>
<br>
Do the same thing with the other version. Export it too. Good, now all you need to do is double click the .reg file you want to import into registry, according to which version you want to use.<br>
<br>
It's important to remember that after every update you must go to regedit and export the registry again, otherwise you'll have to reinstall the version which you forgot to update the registry.<br>
<br>
Any further doubts?<br><br>
</body>
</html>

