 'use strict';
 let jq=$.noConflict();
 
 jq(function(){
  jq("header section i").on("click",function(){
   jq("nav").fadeToggle('slow');
  });
 });
