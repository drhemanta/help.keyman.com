<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Install Method"
  ]);
?>

<h1>IKeymanKeyboardsInstalled::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled::Install</code> installs a keyboard file (.kmx) into Keyman Engine for Windows. This includes copying the file into the
Keyman Engine keyboard store, adding registry settings, and installing the Windows input method. As installing Windows input methods is an asynchronous process,
this method may not be complete when it returns.</p>

<p>This method adds the keyboard to the default language as specified in the <a href='../IKeymanKeyboard/DefaultBCP47Languages'><code>IKeymanKeyboard::DefaultBCP47Languages</code></a> property.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(string Filename, bool Force)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Filename</code></dt>
  <dd>The fully-qualified path to the .kmx file to be installed. This file will be copied to the Keyman keyboard store.</dd>

  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing keyboard entry.</dd>
</dl>

<h2>See also</h2>

<dl>
  <dt><a href='../IKeymanKeyboardsInstalled2/Install2'><code>IKeymanKeyboardsInstalled::Install2</code></a></dt>
  <dd>Installs a keyboard file, optionally with input method for default language</dd>

  <dt><a href='../IKeymanKeyboardFile/Install'><code>IKeymanKeyboardFile::Install</code></a></dt>
  <dd>Installs a keyboard file and input method for default language</dd>

  <dt><a href='../IKeymanKeyboardFile2/Install2'><code>IKeymanKeyboardFile2::Install2</code></a></dt>
  <dd>Installs a keyboard file, optionally with input method for default language</dd>
</dl>