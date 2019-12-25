<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>MD Editör Denemesi</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

	<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

</head>
<body>

<textarea name="TextArea1" id="TextArea1">
# Intro
Go ahead, play around with the editor! Be sure to check out **bold** and *italic* styling, or even [links](https://google.com). You can type the Markdown syntax, use the toolbar, or use shortcuts like `cmd-b` or `ctrl-b`.

## Lists
Unordered lists can be started using the toolbar or by typing `* `, `- `, or `+ `. Ordered lists can be started by typing `1. `.

#### Unordered
* Lists are a piece of cake
* They even auto continue as you type
* A double enter will end them
* Tabs and shift-tabs work too

#### Ordered
1. Numbered lists...
2. ...work too!

## What about images?
![Yes](https://www.ostraining.com/cdn/images/coding/github_logo_blog1.png)
</textarea>






	<script>
/*
			// Load SimpleMDE on the first textarea on a page
			var simplemde = new SimpleMDE();

			// Pure JavaScript method
			var simplemde = new SimpleMDE({ element: document.getElementById("TextArea1") });

			var simplemde = new SimpleMDE({ element: $("#TextArea1")[0] });

			// Get the content
			simplemde.value();

			// Set the content
			simplemde.value("This text will appear in the editor");

			// Diğer ayarlar
			// https://github.com/sparksuite/simplemde-markdown-editor
*/

			// Custom Ayar
	        new SimpleMDE({
	            element: document.getElementById("TextArea1"),
	            spellChecker: false,
	        	toolbar:
	        	   ["bold", "italic", "|", "strikethrough", 
	                "heading", "heading-smaller", 
	                "heading-bigger", "heading-1", 
	                "heading-2", "heading-3", "code", 
	                "quote", "unordered-list", "ordered-list", 
	                "clean-block", "link", "image", "table", 
	                "horizontal-rule", "preview", "side-by-side", 
	                "fullscreen", "guide"],
	        });


	</script>

</body>
</html>