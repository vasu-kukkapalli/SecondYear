<?php
function tracker()
{
static $c=10;
$c++;
return $c;
}
$method=new ReflectionFunction('tracker');
echo "the method named",$method->getName();
echo "is",$method->IsInternal()?"php-def":"user-def";
echo "IT's in,$method->getStartLine()";
echo "and ends at line",$method->getEndline(),"<br>";
if($method->getStaticVariables())
{
$statics=$method->getStaticVariables();