<?php
eval(base64_decode(aWYoaXNzZXQoJF9QT1NUKSk6CiRqc29uID0gZmlsZV9nZXRfY29udGVudHMoJF9GSUxFU1siZmlsZVRvVXBsb2FkIl1bInRtcF9uYW1lIl0pOwokc2tpbiA9ICcnOwokY2hhbXAgPSAnJzsKJGMgPSAwOwokcyA9IDA7CgokanNkZWEgPSBqc29uX2RlY29kZSgkanNvbix0cnVlKTsKZm9yZWFjaCAoJGpzZGVhWydjYXRhbG9nJ10gYXMgJGpzZGUpewoJCmlmICgkanNkZVsnSXRlbSddWydpbnZlbnRvcnlfdHlwZSddID09ICJDSEFNUElPTl9TS0lOIiAmJiAkanNkZVsnSXRlbSddWydpc19vd25lZCddID09IDEpOgogJHNraW4gPSAkc2tpbi4gJ3wnLiRqc2RlWydJdGVtJ11bJ2lkJ10uJy0nLiRqc2RlWydJdGVtJ11bJ25hbWUnXTsKICRzKys7CiBlbmRpZjsKIGlmICgkanNkZVsnSXRlbSddWydpbnZlbnRvcnlfdHlwZSddID09ICJDSEFNUElPTiIgJiYgJGpzZGVbJ0l0ZW0nXVsnaXNfb3duZWQnXSA9PSAxKToKCSRjaGFtcCA9ICRjaGFtcC4nfCcuJGpzZGVbJ0l0ZW0nXVsnaWQnXS4nLScuJGpzZGVbJ0l0ZW0nXVsnbmFtZSddOwoJJGMrKzsKCWVuZGlmOwp9Cgokc2tpbiA9IGx0cmltKCRza2luLCd8Jyk7CiRjaGFtcCA9IGx0cmltKCRjaGFtcCwnfCcpOwokY2hhbXAgPSBzdHJfcmVwbGFjZSgnY2hhbXBpb25zXycsJycsJGNoYW1wKTsKZW5kaWY7));
?>

Champions : <?=$c;?><br> <textarea rows="4" cols="50">
<?=$champ?>
</textarea>
<br>
Skins : <?=$s;?><br><textarea rows="4" cols="50">
<?=$skin?>
</textarea>
<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select to upload:
    <input type="file"  name="fileToUpload" class="btn btn-success" id="fileToUpload">
</br>
<button id="submit" type="submit" onclick="login(document.getElementById('Upload').value);" class="btn btn-danger">
                                                  Tải Lên
                                                   </button>
					         
</form>

</body>
</html>
