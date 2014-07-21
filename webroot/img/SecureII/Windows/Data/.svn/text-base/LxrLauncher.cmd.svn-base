@echo off
if "%1"=="" goto error

rem Insert delay
timeout %1
shift

:loopargs
if "%1"=="" goto done
set UPD_ARGS=%UPD_ARGS% %1
shift
goto loopargs

:done
rem Launch updater
start %UPD_ARGS%
exit

:error
exit /B1