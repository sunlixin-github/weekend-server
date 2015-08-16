<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">id</td>
    <td align="center">name</td>
  </tr>
  @foreach($docs as $doc)
  <tr>
    <td align="center">{{$doc->id}}</td>
    <td align="center">{{HTML::link('doc/show/'.$doc->id,$doc->name)}}</td>
  </tr>
  @endforeach
</table>
</body>
</html>