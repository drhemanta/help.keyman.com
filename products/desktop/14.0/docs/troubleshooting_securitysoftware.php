<?php
  require_once('includes/template.php');

  head([
    'title' => "How To - Resolve Security Software Conflicts with keyman32.dll"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">How To - Resolve Security Software Conflicts with keyman32.dll</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="troubleshooting_excel.php">Prev</a> </td><th width="60%" align="center">Chapter 6. Troubleshooting Index</th><td width="20%" align="right"> <a accesskey="n" href="troubleshooting_bootstrapper.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="troubleshooting_securitysoftware">How To - Resolve Security Software Conflicts with keyman32.dll</h2></div></div></div><p>Certain security softwares impair or prevent the use of the Keyman library file keyman32.dll. This file is completely safe and is necessary for the running of Keyman. Should your security software question you about this file, you will need to allow the file to continue running Keyman.</p><p>If for any reason you are concerned that keyman32.dll may have been tampered with, you may check the file's digital signature here:</p><div class="orderedlist"><ol type="1"><li><p>Open the Windows Start menu.</p></li><li><p>In the search or run box, type %commonprogramfiles% or, in Windows 64-bit, %commonprogramfiles(x86)%.</p></li><li><p>Open the Keyman folder.</p></li><li><p>Open the Keyman Engine folder.</p></li><li><p>Right-click on keyman32.dll.</p></li><li><p>Select Properties from the menu.</p></li><li><p>Select the Digital Signature tab.</p></li><li><p>Select SUMMER INSTITUTE OF LINGUSTICS, INC. in the signature list, and click <span class="guibutton">Details</span>.</p></li><li><p>You should see the message 'This digital signature is OK'. If you receive any other message, please let us know.</p></li></ol></div><p>If you need any assistance using Keyman with your security software you should use the <a class="ulink" href="https://community.software.sil.org/c/keyman" target="_blank">community</a>.</p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="troubleshooting_excel.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="troubleshooting.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="troubleshooting_bootstrapper.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">How To - Use Keyman in Excel </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> How To - Use the Keyman Setup Bootstrapper</td></tr></table></div>
