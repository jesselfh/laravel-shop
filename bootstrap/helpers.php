<?php
//将当前请求的名称转换为CSS类名称 
function route_class(){
	return str_replace('.', '-', Route::currentRouteName());
}