<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">

<link rel="stylesheet" href="./theme/style.css">
<style>
	/* Base */

	body,
	body *:not(html):not(style):not(br):not(tr):not(code) {
		box-sizing: border-box;
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif,
			'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
		position: relative;
	}

	body {
		-webkit-text-size-adjust: none;
		background-color: #ffffff;
		color: #718096;
		height: 100%;
		line-height: 1.4;
		margin: 0;
		padding: 0;
		width: 100% !important;
	}

	p,
	ul,
	ol,
	blockquote {
		line-height: 1.4;
		text-align: left;
	}

	a {
		color: #3869d4;
	}

	a img {
		border: none;
	}

	/* Typography */

	h1 {
		color: #3d4852;
		font-size: 18px;
		font-weight: bold;
		margin-top: 0;
		text-align: left;
	}

	h2 {
		font-size: 16px;
		font-weight: bold;
		margin-top: 0;
		text-align: left;
	}

	h3 {
		font-size: 14px;
		font-weight: bold;
		margin-top: 0;
		text-align: left;
	}

	p {
		font-size: 16px;
		line-height: 1.5em;
		margin-top: 0;
		text-align: left;
	}

	p.sub {
		font-size: 12px;
	}

	img {
		max-width: 100%;
	}

	/* Layout */

	.wrapper {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 100%;
		background-color: #edf2f7;
		margin: 0;
		padding: 0;
		width: 100%;
	}

	.content {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 100%;
		margin: 0;
		padding: 0;
		width: 100%;
	}

	/* Header */

	.header {
		padding: 25px 0;
		text-align: center;
	}

	.header a {
		color: #3d4852;
		font-size: 19px;
		font-weight: bold;
		text-decoration: none;
	}

	/* Logo */

	.logo {
		height: 75px;
		max-height: 75px;
		width: 75px;
	}

	/* Body */

	.body {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 100%;
		background-color: #edf2f7;
		border-bottom: 1px solid #edf2f7;
		border-top: 1px solid #edf2f7;
		margin: 0;
		padding: 0;
		width: 100%;
	}

	.inner-body {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 570px;
		background-color: #ffffff;
		border-color: #e8e5ef;
		border-radius: 2px;
		border-width: 1px;
		box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015);
		margin: 0 auto;
		padding: 0;
		width: 570px;
	}

	/* Subcopy */

	.subcopy {
		border-top: 1px solid #e8e5ef;
		margin-top: 25px;
		padding-top: 25px;
	}

	.subcopy p {
		font-size: 14px;
	}

	/* Footer */

	.footer {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 570px;
		margin: 0 auto;
		padding: 0;
		text-align: center;
		width: 570px;
	}

	.footer p {
		color: #b0adc5;
		font-size: 12px;
		text-align: center;
	}

	.footer a {
		color: #b0adc5;
		text-decoration: underline;
	}

	/* Tables */

	.table table {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 100%;
		margin: 30px auto;
		width: 100%;
	}

	.table th {
		border-bottom: 1px solid #edeff2;
		margin: 0;
		padding-bottom: 8px;
	}

	.table td {
		color: #74787e;
		font-size: 15px;
		line-height: 18px;
		margin: 0;
		padding: 10px 0;
	}

	.content-cell {
		max-width: 100vw;
		padding: 32px;
	}

	/* Buttons */

	.action {
		-premailer-cellpadding: 0;
		-premailer-cellspacing: 0;
		-premailer-width: 100%;
		margin: 30px auto;
		padding: 0;
		text-align: center;
		width: 100%;
	}

	.button {
		-webkit-text-size-adjust: none;
		border-radius: 4px;
		color: #fff;
		display: inline-block;
		overflow: hidden;
		text-decoration: none;
	}

	.button-blue,
	.button-primary {
		background-color: #A4018F;
		border-bottom: 8px solid #A4018F;
		border-left: 18px solid #A4018F;
		border-right: 18px solid #A4018F;
		border-top: 8px solid #A4018F;
	}

	.button-green,
	.button-success {
		background-color: #48bb78;
		border-bottom: 8px solid #48bb78;
		border-left: 18px solid #48bb78;
		border-right: 18px solid #48bb78;
		border-top: 8px solid #48bb78;
	}

	.button-red,
	.button-error {
		background-color: #e53e3e;
		border-bottom: 8px solid #e53e3e;
		border-left: 18px solid #e53e3e;
		border-right: 18px solid #e53e3e;
		border-top: 8px solid #e53e3e;
	}

	/* Panels */

	.panel {
		border-left: #2d3748 solid 4px;
		margin: 21px 0;
	}

	.panel-content {
		background-color: #edf2f7;
		color: #718096;
		padding: 16px;
	}

	.panel-content p {
		color: #718096;
	}

	.panel-item {
		padding: 0;
	}

	.panel-item p:last-of-type {
		margin-bottom: 0;
		padding-bottom: 0;
	}

	/* Utilities */

	.break-all {
		word-break: break-all;
	}

	@media only screen and (max-width: 600px) {
	.inner-body {
	width: 100% !important;
	}

	.footer {
	width: 100% !important;
	}
	}

	@media only screen and (max-width: 500px) {
	.button {
	width: 100% !important;
	}
	}
</style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">

<tr>
<td class="header">
<a href="/" style="display: inline-block;">
@if (!$array['content'])
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="">
@else
<img src="https://quivor.ng/public/uploads/all/BroulCVZo1E0WnJLxwwx4TMudXiMGHz3mZv4GLEq.png" class="logo" alt="" style="width: 108px; height: 36px;">
@endif
</a>
</td>
</tr>
<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<!-- Body content -->
<tr>

<tbody><tr>
<td class="content-cell" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; max-width: 100vw; padding: 32px;">
<h1 style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;">{{ $array['greeting'] }}</h1>
<p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Please click the  below to verify your email address.</p>
<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padding: 0; text-align: center; width: 100%;">
<tbody><tr>
<td align="center" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<tbody><tr>
<td align="center" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<tbody><tr>
<td style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<a target="_blank" rel="noopener noreferrer" href="{{$array['link']}}" class="button button-primary" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-text-size-adjust: none; border-radius: 4px; color: #fff; display: inline-block; overflow: hidden; text-decoration: none; background-color: #A4018F; border-bottom: 8px solid #A4018F; border-left: 18px solid #A4018F; border-right: 18px solid #A4018F; border-top: 8px solid #A4018F;">Verify Email</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">This email verification link will expire in 10 minutes.</p>
<p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Regards,<br>
Quivor</p>


<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; border-top: 1px solid #e8e5ef; margin-top: 25px; padding-top: 25px;">
<tbody><tr>
<td style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative;">
<p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; line-height: 1.5em; margin-top: 0; text-align: left; font-size: 14px;">If you're having trouble clicking the "Verify Email" button, copy and paste the URL below
into your web browser: <span class="break-all" style="font-size: 11px; box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; word-break: break-all;"><a target="_blank" rel="noopener noreferrer" href="{{$array['link']}}">{{$array['link']}}</a></span></p>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody>

</td>
</tr>
</table>
</td>
</tr>

<tr>
<td>
<table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td class="content-cell" align="center">
  <p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; line-height: 1.5em; margin-top: 0; color: #b0adc5; font-size: 12px;">
    © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
  </p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>