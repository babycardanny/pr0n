// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2008 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
myBbcodeSettings = {
  nameSpace:          "bbcode", // Useful to prevent multi-instances CSS conflict
  previewParserPath:  "~/../../ajax/blog_preview",
  markupSet: [
      {name:'Bold', key:'B', openWith:'[b]', closeWith:'[/b]'}, 
      {name:'Italic', key:'I', openWith:'[i]', closeWith:'[/i]'}, 
      {name:'Underline', key:'U', openWith:'[u]', closeWith:'[/u]'}, 
      {separator:'---------------' },
      {name:'Photo', key:'P', beforeInsert:function() { insert_media('favorite_photos', 1); } },
      {name:'Video', key:'V', beforeInsert:function() { insert_media('playlist_videos', 1); } },
      {separator:'---------------' },
      {name:'Colors', dropMenu: [
          {name:'Yellow', openWith:'[color=yellow]', closeWith:'[/color]', className:"col1-1" },
          {name:'Orange', openWith:'[color=orange]', closeWith:'[/color]', className:"col1-2" },
          {name:'Red', openWith:'[color=red]', closeWith:'[/color]', className:"col1-3" },
          {name:'Blue', openWith:'[color=blue]', closeWith:'[/color]', className:"col2-1" },
          {name:'Purple', openWith:'[color=purple]', closeWith:'[/color]', className:"col2-2" },
          {name:'Green', openWith:'[color=green]', closeWith:'[/color]', className:"col2-3" },
          {name:'White', openWith:'[color=white]', closeWith:'[/color]', className:"col3-1" },
          {name:'Gray', openWith:'[color=gray]', closeWith:'[/color]', className:"col3-2" },
          {name:'Black', openWith:'[color=black]', closeWith:'[/color]', className:"col3-3" }
      ]},
      {name:'Size', dropMenu :[
          {name:'Big', openWith:'[size=200]', closeWith:'[/size]' },
          {name:'Normal', openWith:'[size=100]', closeWith:'[/size]' },
          {name:'Small', openWith:'[size=50]', closeWith:'[/size]' }
      ]},
      {separator:'---------------' },
      {name:'Clean', className:"clean", replaceWith:function(h) { return h.selection.replace(/\[(.*?)\]/g, "") } },
      {name:'Preview', className:"preview", call:'preview' }
   ]
}