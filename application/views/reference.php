<style>
.refBtn{
    font-size:13px;
    color:#b1b1b1;
    font-weight:bold;
}
#reference > div{
    border-bottom:1px solid #333333;
}
#referenceNavbar > div{
    padding-right:30px;
}

</style>

<div id="reference">
    <div class="row" id="referenceNavbar" style="height:50px;padding-top:5px;padding-bottom:5px;">
        <div class="col-lg-1" style="">
            <button id="showAllRefBtn" type="button" class="btn btn-danger" style="margin-left:10px;"> 목 록 </button>
        </div>
        <div class="col-lg-8" style="">
        </div>
        <div class="col-lg-3" style="">
            <div class="input-group">
                <input id="refSearch"type="text" class="form-control">
                <span class="input-group-btn">
                    <button id="refSearchBtn" class="btn btn-success" type="button"> 검 색 </button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div>
    <div id="referenceDev">
        <div id="referenceContents">
            <div class="row">
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#" data-in="isdigit">isdigit</a>
                    <a class="refBtn btn btn-block" href="#" data-in="iscntrl">iscntrl</a>
                    <a class="refBtn btn btn-block" href="#">isblack</a>
                    <a class="refBtn btn btn-block" href="#">isascii</a>
                    <a class="refBtn btn btn-block" href="#">isalpha</a>
                    <a class="refBtn btn btn-block" href="#">isalnum</a>
                    <a class="refBtn btn btn-block" href="#">strncmp</a>
                    <a class="refBtn btn btn-block" href="#">strcmp</a>
                    <a class="refBtn btn btn-block" href="#">strncat</a>
                    <a class="refBtn btn btn-block" href="#">strcat</a>
                    <a class="refBtn btn btn-block" href="#">strncpy</a>
                    <a class="refBtn btn btn-block" href="#">strcpy</a>
                    <a class="refBtn btn btn-block" href="#">sigemptyset</a>
                    <a class="refBtn btn btn-block" href="#">strtok</a>
                    <a class="refBtn btn btn-block" href="#">strpbrk</a>
                    <a class="refBtn btn btn-block" href="#">strcspn</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">strspn</a>
                    <a class="refBtn btn btn-block" href="#">strstr</a>
                    <a class="refBtn btn btn-block" href="#">strrchr</a>
                    <a class="refBtn btn btn-block" href="#">strchr</a>
                    <a class="refBtn btn btn-block" href="#">strlen</a>
                    <a class="refBtn btn btn-block" href="#">strdup</a>
                    <a class="refBtn btn btn-block" href="#">strncasecmp</a>
                    <a class="refBtn btn btn-block" href="#">strcasecmp</a>
                    <a class="refBtn btn btn-block" href="#">tolower</a>
                    <a class="refBtn btn btn-block" href="#">toupper</a>
                    <a class="refBtn btn btn-block" href="#">isxdigit</a>
                    <a class="refBtn btn btn-block" href="#">isupper</a>
                    <a class="refBtn btn btn-block" href="#">ispunct</a>
                    <a class="refBtn btn btn-block" href="#">isprint</a>
                    <a class="refBtn btn btn-block" href="#">islower</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">isgraph</a>
                    <a class="refBtn btn btn-block" href="#">memset</a>
                    <a class="refBtn btn btn-block" href="#">memcmp</a>
                    <a class="refBtn btn btn-block" href="#">memchr</a>
                    <a class="refBtn btn btn-block" href="#">memmove</a>
                    <a class="refBtn btn btn-block" href="#">memcpy</a>
                    <a class="refBtn btn btn-block" href="#">realloc</a>
                    <a class="refBtn btn btn-block" href="#">free</a>
                    <a class="refBtn btn btn-block" href="#">calloc</a>
                    <a class="refBtn btn btn-block" href="#">malloc</a>
                    <a class="refBtn btn btn-block" href="#" data-in="fseek">fseek</a>
                    <a class="refBtn btn btn-block" href="#">rewine</a>
                    <a class="refBtn btn btn-block" href="#">ftell</a>
                    <a class="refBtn btn btn-block" href="#">clearerr</a>
                    <a class="refBtn btn btn-block" href="#">ferror</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">feof</a>
                    <a class="refBtn btn btn-block" href="#">ungetc</a>
                    <a class="refBtn btn btn-block" href="#">fwrite</a>
                    <a class="refBtn btn btn-block" href="#">fread</a>
                    <a class="refBtn btn btn-block" href="#">fprintf</a>
                    <a class="refBtn btn btn-block" href="#">fscanf</a>
                    <a class="refBtn btn btn-block" href="#">fputs</a>
                    <a class="refBtn btn btn-block" href="#">fgets</a>
                    <a class="refBtn btn btn-block" href="#">fputc</a>
                    <a class="refBtn btn btn-block" href="#">fclose</a>
                    <a class="refBtn btn btn-block" href="#">fopen</a>
                    <a class="refBtn btn btn-block" href="#">sprintf</a>
                    <a class="refBtn btn btn-block" href="#">sscanf</a>
                    <a class="refBtn btn btn-block" href="#">printf</a>
                    <a class="refBtn btn btn-block" href="#">scanf</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">puts</a>
                    <a class="refBtn btn btn-block" href="#">gets</a>
                    <a class="refBtn btn btn-block" href="#">putchar</a>
                    <a class="refBtn btn btn-block" href="#">getchar</a>
                    <a class="refBtn btn btn-block" href="#">dup2</a>
                    <a class="refBtn btn btn-block" href="#">dup</a>
                    <a class="refBtn btn btn-block" href="#">ftruncate</a>
                    <a class="refBtn btn btn-block" href="#">truncate</a>
                    <a class="refBtn btn btn-block" href="#">fdopen</a>
                    <a class="refBtn btn btn-block" href="#">lseek</a>
                    <a class="refBtn btn btn-block" href="#">read</a>
                    <a class="refBtn btn btn-block" href="#">fcntl</a>
                    <a class="refBtn btn btn-block" href="#">access</a>
                    <a class="refBtn btn btn-block" href="#">fsync</a>
                    <a class="refBtn btn btn-block" href="#">sync</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">chroot</a>
                    <a class="refBtn btn btn-block" href="#">fchown</a>
                    <a class="refBtn btn btn-block" href="#">chown</a>
                    <a class="refBtn btn btn-block" href="#">rename</a>
                    <a class="refBtn btn btn-block" href="#">remove</a>
                    <a class="refBtn btn btn-block" href="#">symlink</a>
                    <a class="refBtn btn btn-block" href="#">unlink</a>
                    <a class="refBtn btn btn-block" href="#">link</a>
                    <a class="refBtn btn btn-block" href="#">rewinddir</a>
                    <a class="refBtn btn btn-block" href="#">readdir</a>
                    <a class="refBtn btn btn-block" href="#">closedir</a>
                    <a class="refBtn btn btn-block" href="#">opendir</a>
                    <a class="refBtn btn btn-block" href="#">getcwd</a>
                    <a class="refBtn btn btn-block" href="#">creat</a>
                    <a class="refBtn btn btn-block" href="#">write</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">close</a>
                    <a class="refBtn btn btn-block" href="#">open</a>
                    <a class="refBtn btn btn-block" href="#">log10</a>
                    <a class="refBtn btn btn-block" href="#">log</a>
                    <a class="refBtn btn btn-block" href="#">exp</a>
                    <a class="refBtn btn btn-block" href="#">tan</a>
                    <a class="refBtn btn btn-block" href="#">cos</a>
                    <a class="refBtn btn btn-block" href="#">sin</a>
                    <a class="refBtn btn btn-block" href="#">sqrt</a>
                    <a class="refBtn btn btn-block" href="#">pow</a>
                    <a class="refBtn btn btn-block" href="#">srand</a>
                    <a class="refBtn btn btn-block" href="#">rand</a>
                    <a class="refBtn btn btn-block" href="#">modf</a>
                    <a class="refBtn btn btn-block" href="#">floor</a>
                    <a class="refBtn btn btn-block" href="#">ceil</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">fmod</a>
                    <a class="refBtn btn btn-block" href="#">ldiv</a>
                    <a class="refBtn btn btn-block" href="#">div</a>
                    <a class="refBtn btn btn-block" href="#">fabs</a>
                    <a class="refBtn btn btn-block" href="#">labs</a>
                    <a class="refBtn btn btn-block" href="#">abs</a>
                    <a class="refBtn btn btn-block" href="#">qsort</a>
                    <a class="refBtn btn btn-block" href="#">hdestroy</a>
                    <a class="refBtn btn btn-block" href="#">hsearch</a>
                    <a class="refBtn btn btn-block" href="#">hcreate</a>
                    <a class="refBtn btn btn-block" href="#">twalk</a>
                    <a class="refBtn btn btn-block" href="#">tdelete</a>
                    <a class="refBtn btn btn-block" href="#">tfind</a>
                    <a class="refBtn btn btn-block" href="#">tsearch</a>
                    <a class="refBtn btn btn-block" href="#">bsearch</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">lfind</a>
                    <a class="refBtn btn btn-block" href="#">lsearch</a>
                    <a class="refBtn btn btn-block" href="#">rindex</a>
                    <a class="refBtn btn btn-block" href="#">index</a>
                    <a class="refBtn btn btn-block" href="#">fork</a>
                    <a class="refBtn btn btn-block" href="#">system</a>
                    <a class="refBtn btn btn-block" href="#">execve</a>
                    <a class="refBtn btn btn-block" href="#">execvp</a>
                    <a class="refBtn btn btn-block" href="#">execv</a>
                    <a class="refBtn btn btn-block" href="#">execle</a>
                    <a class="refBtn btn btn-block" href="#">execlp</a>
                    <a class="refBtn btn btn-block" href="#">execl</a>
                    <a class="refBtn btn btn-block" href="#">waitpid</a>
                    <a class="refBtn btn btn-block" href="#">wait</a>
                    <a class="refBtn btn btn-block" href="#">atexit</a>
                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">exit</a>
                    <a class="refBtn btn btn-block" href="#">vfork</a>
                    <a class="refBtn btn btn-block" href="#">usleep</a>
                    <a class="refBtn btn btn-block" href="#">sigsuspend</a>
                    <a class="refBtn btn btn-block" href="#">sigpending</a>
                    <a class="refBtn btn btn-block" href="#">sigpromask</a>
                    <a class="refBtn btn btn-block" href="#">alarm</a>
                    <a class="refBtn btn btn-block" href="#">raise</a>
                    <a class="refBtn btn btn-block" href="#">pause</a>
                    <a class="refBtn btn btn-block" href="#">kill</a>
                    <a class="refBtn btn btn-block" href="#">sigaction</a>
                    <a class="refBtn btn btn-block" href="#">signal</a>
                    <a class="refBtn btn btn-block" href="#">sleep</a>
                    <a class="refBtn btn btn-block" href="#">sigfillset</a>
                    <a class="refBtn btn btn-block" href="#">sigismember</a>

                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">sigdelset</a>
                    <a class="refBtn btn btn-block" href="#">sigaddset</a>
                    <a class="refBtn btn btn-block" href="#">strtof</a>
                    <a class="refBtn btn btn-block" href="#">strtod</a>
                    <a class="refBtn btn btn-block" href="#">strtoul</a>
                    <a class="refBtn btn btn-block" href="#">strtol</a>
                    <a class="refBtn btn btn-block" href="#">atof</a>
                    <a class="refBtn btn btn-block" href="#">atol</a>
                    <a class="refBtn btn btn-block" href="#">atoi</a>
                    <a class="refBtn btn btn-block" href="#">clock</a>
                    <a class="refBtn btn btn-block" href="#">difftime</a>
                    <a class="refBtn btn btn-block" href="#">strftime</a>
                    <a class="refBtn btn btn-block" href="#">mktime</a>
                    <a class="refBtn btn btn-block" href="#">gmtime</a>
                    <a class="refBtn btn btn-block" href="#">localtime</a>

                </div>
                <div class="col-lg-1"><!--목차-->
                    <a class="refBtn btn btn-block" href="#">ctime</a>
                    <a class="refBtn btn btn-block" href="#">time</a>
                    <a class="refBtn btn btn-block" href="#">getopt_long</a>
                    <a class="refBtn btn btn-block" href="#">unsetenv</a>
                    <a class="refBtn btn btn-block" href="#">setenv</a>
                    <a class="refBtn btn btn-block" href="#">putenv</a>
                    <a class="refBtn btn btn-block" href="#">getenv</a>
                    <a class="refBtn btn btn-block" href="#">environ</a>
                    <a class="refBtn btn btn-block" href="#">envp</a>
                    <a class="refBtn btn btn-block" href="#">getopt</a>
                    <a class="refBtn btn btn-block" href="#">abort</a>
                    <a class="refBtn btn btn-block" href="#">assert</a>
                    <a class="refBtn btn btn-block" href="#">perror</a>
                    <a class="refBtn btn btn-block" href="#">strerror</a>
                    <a class="refBtn btn btn-block" href="#">errno</a>
                </div>
            </div>
        </div><!--referenceContents-->
        <div id="referenceBody" class="row"  style="padding-left:20px;padding-right:20px;">
            <div id="referenceDesc"class="col-lg-4" style="padding:10px;background-color:white;margin-top:30px;margin-bottom:30px;height:500px">
                <label id="refName" style="padding-left:10px;font-size:30px;">
                </label>
                <table class="table">
                    <thead>
                        <tr>
                            <td><b>헤더</b></td>
                            <td id="refHeader">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>형태</b></td>
                            <td id="refForm">
                            </td>
                        </tr>
                        <tr>
                            <td><b>인자</b></td>
                            <td id="refParameter">
                            </td>
                        </tr>
                        <tr>
                            <td><b>반환</b></td>
                            <td id="refReturn">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="refTip">
                </div>
            </div>
            <div id="referenceCode" class="col-lg-4" style="padding-top:30px;">
            </div>
            <div id="" class="col-lg-4" style="margin-top:30px;background-color:white;">
            </div>
        </div>
        <div class="row">
            <div id="refSearchDiv" class="col-lg-6 col-offset-3" style="background-color:white;">

            </div>
        </div>



    </div><!--referenceDiv-->

</div>

