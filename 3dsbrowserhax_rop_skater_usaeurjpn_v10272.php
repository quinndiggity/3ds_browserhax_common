<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x00277000 + 0x00061000 + 0x00009EF8 + 0x00045928) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x0840D000;
$PEERCRO_HEAPADR = 0x08319000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027b138;
$COND_THROWFATALERR = 0x0026276c;

$ROP_POP_R0R6PC = 0x001df7f0;
$ROP_POP_R0R8PC = 0x0030c328;
$ROP_POP_R0PC = 0x00296e64;
$ROP_POP_R1R5PC = 0x001dcdd0;

$ROP_STR_R1TOR0 = 0x00226c10;
$ROP_LDR_R0FROMR0 = 0x001f7a04;
$ROP_ADDR0_TO_R1 = 0x0027b9e8;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00297508;

$srv_GetServiceHandle = 0x001eaafc;

$svcGetProcessId = 0x0026bc2c;
$svcSendSyncRequest = 0x001eb138;
$svcControlMemory = 0x002634dc;
$svcSleepThread = 0x002d8cd4;

$GXLOW_CMD4 = 0x002a2498;
$GSPGPU_SERVHANDLEADR = 0x003e03d0;

$FS_MOUNTSDMC = 0x00318d30;

$IFile_Open = 0x003222e4;
$IFile_GetSize = 0x001f1fdc;
$IFile_Seek = 0x0032d94c;
$IFile_Read = 0x0030c44c;

$FS_DELETEFILE = 0x00325b14;

$FSFILEIPC_CLOSE = 0x00267d88;
$FSFILEIPC_READ = 0x00267d30;
$FSFILEIPC_GETSIZE = 0x00334938;

$POPPC = 0x001df60c;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x00422c50;

$WKC_FOPEN = $OSSCRO_MAPADR+0xdf944-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xdf934-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xdf93c-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xdf94c-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x2dfb9-0x4;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dc048-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4dbba8-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dc1b8-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4dbbb0-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4db450-0x4;

$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4db430-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xdf73c-0x4;

$GSP_FLUSHDCACHE = 0x0029dadc;
$GSP_WRITEHWREGS = 0x00298304;

$IFile_Close = 0x001ec780;
$IFile_Write = 0x00327258;

$THROW_FATALERR = 0x001f1fac;

$ROP_LDMSTM_R5R4_R0R3 = 0x001e8b28;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b28b8;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x00103d3c;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0002d6cd;

?>