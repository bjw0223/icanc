<link rel="stylesheet" href="<?=base_url();?>asset/lib/codemirror/theme/lesser-dark.css">
<style>

.refBtn{
    font-size:15px;
    color:white;
}
.refBtn:hover{
    font-size:15px;
    color:white;
    font-weight:bold;
}

#reference > div{
  /*  border-bottom:1px solid #333333;*/
}
#reference {
    background-color:#2C3E49;
}
#referenceContents {
    background-color:#2C3E49;
}
#referenceDesc {
    background-color: #232c31;
    padding:10px;
    margin-top:30px;
    margin-bottom:10px;
    height:500px;
    color:white;
}
#referenceNavbar > div{
    padding-right:30px;
}
#ref-code {
 /*   padding-top:30px;*/
    margin-top:10px;
}
#referenceCode {
    height:444px;
}
#refTip{
    margin-top:30px;
}
#refSearchDiv {
    background-color: #232c31;
    color:white;
    margin-top:60px;
    margin-bottom:60px;
}
#refSearchDiv th {
    color:white;
    font-size:20px;
}
#refSearchDiv tbody > tr:hover {
    background-color: #111111;
}
#refTip {
    background-color: #232c31;
    height:500px;
    color:white;
    padding-top:10px;
    line-height:20px;
}

#refName {
    padding-left:10px;
    font-size:30px;
}
#referenceBody {
    padding-left:20px;
    padding-right:20px;
}
#referenceNavbar {
    height:50px;
    padding-top:5px;
    padding-bottom:5px;
}
#showAllRefBtn { 
    margin-left:10px;
}
#ref-result {
}
#ref-info {
    height:200px;
    overflow-y:auto;
}
#ref-result-desc {
    background-color:black;
    min-height:180px;
    max-height:180px;
    overflow-y:auto;
    padding:10px;
}
#ref-example {
    background-color: #232c31;
}
#ref-example >h3 {
    margin:none;
    padding:10px;
    color:white;
}
.CodeMirror {
    border: 0px solid #eee;
    width: 100%;
}
#referenceCode .CodeMirror {
    height: 444px;
}

#codeDiv > .CodeMirror {
    width : 100%;
}

#headDiv > .CodeMirror, #tailDiv > #CodeMirror {
    width : 100%;
    overflow-x : hidden;
}

.CodeMirror-scroll {
    overflow-y: auto;
    overflow-x: hidden;
}

.CodeMirror-linenumber {
    width:30px;
    text-align:center;
}

</style>

<div id="reference">
    <div class="row" id="referenceNavbar">
        <div class="col-lg-1 col-sm-1">
            <button id="showAllRefBtn" type="button" class="btn btn-danger"> 목 록 </button>
        </div>
        <div class="col-lg-8 col-sm-8" style="">
        </div>
        <div class="col-lg-3 col-sm-3" style="">
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
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isdigit">isdigit</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="iscntrl">iscntrl</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isblank">isblank</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isascii">isascii</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isalpha">isalpha</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isalnum">isalnum</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strncmp">strncmp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strcmp">strcmp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strncat">strncat</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strcat">strcat</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strncpy">strncpy</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strcpy">strcpy</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="sigemptyset">sigemptyset</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strtok">strtok</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strpbrk">strpbrk</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strcspn">strcspn</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strspn">strspn</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strstr">strstr</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strrchr">strrchr</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strchr">strchr</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strlen">strlen</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strdup">strdup</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strncasecmp">strncasecmp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="strcasecmp">strcasecmp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="tolower">tolower</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="toupper">toupper</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isxdigit">isxdigit</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isupper">isupper</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="ispunct">ispunct</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isprint">isprint</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="islower">islower</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="isgraph">isgraph</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="memset">memset</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="memcmp">memcmp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="memchr">memchr</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="memmove">memmove</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="memcpy">memcpy</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="realloc">realloc</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="free">free</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="calloc">calloc</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="malloc">malloc</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="fseek">fseek</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="rewine">rewine</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="ftell">ftell</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="clearerr">clearerr</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="ferror">ferror</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">feof</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">ungetc</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fwrite</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fread</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fprintf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fscanf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fputs</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fgets</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fputc</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fclose</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fopen</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sprintf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sscanf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">printf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">scanf</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">puts</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">gets</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">putchar</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">getchar</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">dup2</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">dup</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">ftruncate</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">truncate</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fdopen</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">lseek</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">read</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fcntl</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">access</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fsync</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sync</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">chroot</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fchown</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">chown</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">rename</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">remove</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">symlink</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">unlink</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">link</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">rewinddir</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">readdir</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">closedir</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">opendir</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">getcwd</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">creat</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">write</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">close</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">open</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">log10</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">log</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">exp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">tan</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">cos</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sin</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sqrt</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">pow</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">srand</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">rand</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">modf</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">floor</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">ceil</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fmod</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">ldiv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">div</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fabs</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">labs</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">abs</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">qsort</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">hdestroy</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">hsearch</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">hcreate</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">twalk</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">tdelete</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">tfind</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">tsearch</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">bsearch</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">lfind</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">lsearch</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">rindex</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">index</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">fork</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">system</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execve</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execvp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execle</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execlp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">execl</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">waitpid</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">wait</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">atexit</a>
                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">exit</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">vfork</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">usleep</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigsuspend</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigpending</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigpromask</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">alarm</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">raise</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">pause</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">kill</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigaction</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">signal</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sleep</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigfillset</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigismember</a>

                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigdelset</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">sigaddset</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strtof</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strtod</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strtoul</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strtol</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">atof</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">atol</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">atoi</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">clock</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">difftime</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strftime</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">mktime</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">gmtime</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">localtime</a>

                </div>
                <div class="col-lg-1 col-sm-1"><!--목차-->
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">ctime</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">time</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">getopt_long</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">unsetenv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">setenv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">putenv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">getenv</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">environ</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">envp</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">getopt</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">abort</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">assert</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">perror</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">strerror</a>
                    <a class="refBtn btn btn-small btn-block" href="#" data-in="">errno</a>
                </div>
            </div>
        </div><!--referenceContents-->
    </div>
</div>

