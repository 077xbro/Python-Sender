@rem @author: ID3n3tsp3tID
@rem @Date: 2020-01-14 07:18:07
@rem @last Modified by: ID3n3tsp3tID
@rem Modified time: | $date
@echo off
set PATH=%PATH%;c:\xampp\php
title Sendinbox Google Script CommandLine (SENBOXMAILER) 2020
:runsendinbox

php sendinbox.php
pause
cls
goto runsendinbox
