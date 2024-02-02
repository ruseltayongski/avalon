<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Instructions</title>
    <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f0f0f0;
         color: #333;
      }

      .container {
         width: 80%;
         margin: 20px auto;
         padding: 20px;
         background-color: #fff;
         box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }

      pre {
         background-color: #eaeaea;
         padding: 15px;
         overflow: auto;
      }

      code {
         font-family: 'Courier New', Courier, monospace;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Open a Local Folder with PHP</h1>
        <p>This demo shows how to create a PHP script to attempt to open a local folder.</p>
        <h2>Code Snippet:</h2>
        <pre><code>
        &lt;!DOCTYPE html&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
            &lt;title&gt;Open Folder&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;?php
            $folderPath = 'C:\Users\jonndoe\OneDrive\Desktop\demo';
            ?&gt;

            &lt;p&gt;Click the button to open the folder directory:&lt;/p&gt;
            &lt;a href="&lt;?php echo $folderPath; ?&gt;" target="_blank"&gt;&lt;button&gt;Open Folder&lt;/button&gt;&lt;/a&gt;
        &lt;/body&gt;
        &lt;/html&gt;
        </code></pre>

        <h1>Accessing Local Directories with Chrome Extension</h1>
        <ol>
            <li style="word-wrap: break-word;">
               Visit the Chrome Web Store and search for the "<b>Enable local file links</b>" extension or just click this link <a href="https://chromewebstore.google.com/detail/nikfmfgobenbhmocjaaboihbeocackld" target="_blank">https://chromewebstore.google.com/detail/nikfmfgobenbhmocjaaboihbeocackld</a>
            </li>
            <li>Click on "Add to Chrome" to install the extension.</li>
            <li>Once successfully installed, click the button Open Folder</li>
        </ol>

        <h1>Enabling the feature</h1>
        <ol>
            <li style="word-wrap: break-word;">Open <a href="chrome://extensions/?id=nikfmfgobenbhmocjaaboihbeocackld" target="_blank">chrome://extensions/?id=nikfmfgobenbhmocjaaboihbeocackld</a></li>
            <li>Enable "Allow access to file URLs"</li>
        </ol>
    </div>
</body>
</html>
