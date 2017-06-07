<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {foreach from=$styles key=key item=style}
    <link rel="stylesheet" href="{$style}">
    {/foreach}
    {foreach from=$scripts item=script}
    <script type="text/javascript" src="{$script}"></script>
    {/foreach}
    <title>{$title}</title>
</head>
<body>