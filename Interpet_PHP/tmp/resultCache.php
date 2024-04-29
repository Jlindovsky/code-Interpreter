<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1713219874,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.57',
  'phpVersion' => 80303,
  'projectConfig' => '{parameters: {allowInRootDir: null, filesRootDir: %allowInRootDir%, disallowedNamespaces: [], disallowedClasses: [], disallowedMethodCalls: [], disallowedStaticCalls: [], disallowedFunctionCalls: [{function: "exec()"}, {function: "passthru()"}, {function: "proc_open()"}, {function: "proc_get_status()"}, {function: "proc_nice()"}, {function: "proc_close()"}, {function: "proc_terminate()"}, {function: "shell_exec()"}, {function: "system()"}, {function: "pcntl_exec()"}, {function: "popen()"}, {function: "checkdnsrr()"}, {function: "closelog()"}, {function: "define_syslog_variables()"}, {function: "dns_check_record()"}, {function: "dns_get_mx()"}, {function: "dns_get_record()"}, {function: "fsockopen()"}, {function: "gethostbyaddr()"}, {function: "gethostbyname()"}, {function: "gethostbynamel()"}, {function: "gethostname()"}, {function: "getmxrr()"}, {function: "getprotobyname()"}, {function: "getprotobynumber()"}, {function: "getservbyname()"}, {function: "getservbyport()"}, {function: "header_register_callback()"}, {function: "header_remove()"}, {function: "header()"}, {function: "headers_list()"}, {function: "headers_sent()"}, {function: "http_response_code()"}, {function: "inet_ntop()"}, {function: "inet_pton()"}, {function: "ip2long()"}, {function: "long2ip()"}, {function: "openlog()"}, {function: "pfsockopen()"}, {function: "setcookie()"}, {function: "setrawcookie()"}, {function: "socket_create()"}, {function: "socket_connect()"}, {function: "socket_get_status()"}, {function: "socket_set_blocking()"}, {function: "socket_set_timeout()"}, {function: "syslog()"}, {function: "mail()"}, {function: "curl_exec()"}, {function: "curl_multi_exec()"}, {function: "parse_ini_file()"}, {function: "show_source()"}], disallowedConstants: [], disallowedEnums: [], disallowedSuperglobals: [], disallowedAttributes: [], level: 9, paths: [/ipp-php/core, /ipp-php/student], tmpDir: /ipp-php/tmp}, services: {Spaze\\PHPStan\\Rules\\Disallowed\\Allowed\\Allowed, Spaze\\PHPStan\\Rules\\Disallowed\\Allowed\\AllowedPath, Spaze\\PHPStan\\Rules\\Disallowed\\DisallowedAttributeFactory, Spaze\\PHPStan\\Rules\\Disallowed\\DisallowedCallFactory, Spaze\\PHPStan\\Rules\\Disallowed\\DisallowedConstantFactory, Spaze\\PHPStan\\Rules\\Disallowed\\DisallowedNamespaceFactory, Spaze\\PHPStan\\Rules\\Disallowed\\DisallowedSuperglobalFactory, {arguments: {rootDir: %filesRootDir%}}, Spaze\\PHPStan\\Rules\\Disallowed\\Formatter\\Formatter, Spaze\\PHPStan\\Rules\\Disallowed\\Identifier\\Identifier, Spaze\\PHPStan\\Rules\\Disallowed\\Normalizer\\Normalizer, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedAttributeRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedConstantRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedMethodRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedNamespaceRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedCallsRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\RuleErrors\\DisallowedVariableRuleErrors, Spaze\\PHPStan\\Rules\\Disallowed\\Type\\TypeResolver, {factory: {arguments: {forbiddenNamespaces: %disallowedNamespaces%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenNamespaces: %disallowedClasses%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedMethodCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedMethodCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedStaticCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {forbiddenCalls: %disallowedFunctionCalls%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {disallowedConstants: %disallowedConstants%}}, tags: [phpstan.rules.rule]}, classConstantUsages: {factory: {arguments: {disallowedConstants: %disallowedConstants%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {disallowedConstants: %disallowedEnums%}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {disallowedVariables: {arguments: [%disallowedSuperglobals%]}}}, tags: [phpstan.rules.rule]}, {factory: {arguments: {disallowedAttributes: %disallowedAttributes%}}, tags: [phpstan.rules.rule]}}}',
  'analysedPaths' => 
  array (
    0 => '/ipp-php/core',
    1 => '/ipp-php/student',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/ipp-php/composer.lock' => '418d1b098fde6051f2f93cf1758bdcb9558bb334',
  ),
  'composerInstalled' => 
  array (
    '/ipp-php/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.57',
          'version' => '1.10.57.0',
          'reference' => '1627b1d03446904aaa77593f370c5201d2ecc34e',
          'type' => 'library',
          'install_path' => '/ipp-php/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spaze/phpstan-disallowed-calls' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'fe566326b015674429e1a67a5343183942f493b9',
          'type' => 'phpstan-extension',
          'install_path' => '/ipp-php/vendor/composer/../spaze/phpstan-disallowed-calls',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///ipp-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///ipp-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///ipp-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///ipp-php/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'ctype',
    7 => 'curl',
    8 => 'date',
    9 => 'dom',
    10 => 'fileinfo',
    11 => 'filter',
    12 => 'hash',
    13 => 'iconv',
    14 => 'json',
    15 => 'libxml',
    16 => 'mbstring',
    17 => 'mysqlnd',
    18 => 'openssl',
    19 => 'pcre',
    20 => 'pdo_sqlite',
    21 => 'posix',
    22 => 'random',
    23 => 'readline',
    24 => 'session',
    25 => 'sodium',
    26 => 'sqlite3',
    27 => 'standard',
    28 => 'tokenizer',
    29 => 'xml',
    30 => 'xmlreader',
    31 => 'xmlwriter',
    32 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '9',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/ipp-php/core/AbstractInterpreter.php' => 
  array (
    'fileHash' => '5a8296491527cf7bf175250704b13b8844de1c88',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
      1 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/core/Engine.php' => 
  array (
    'fileHash' => 'df5f8327d7f527b8440e7e6b8ff8b1b878d9b5e4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/ipp-php/core/Exception/ExecuteReturnCodeException.php' => 
  array (
    'fileHash' => '199d803fbc2df3611323e65186d99112fffaafb0',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
    ),
  ),
  '/ipp-php/core/Exception/IPPException.php' => 
  array (
    'fileHash' => 'f2bdd38e41377df3db01ec2883857c06ceff3828',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
      1 => '/ipp-php/core/Exception/ExecuteReturnCodeException.php',
      2 => '/ipp-php/core/Exception/InputFileException.php',
      3 => '/ipp-php/core/Exception/IntegrationException.php',
      4 => '/ipp-php/core/Exception/InternalErrorException.php',
      5 => '/ipp-php/core/Exception/NotImplementedException.php',
      6 => '/ipp-php/core/Exception/OutputFileException.php',
      7 => '/ipp-php/core/Exception/ParameterException.php',
      8 => '/ipp-php/core/Exception/XMLException.php',
      9 => '/ipp-php/core/FileInputReader.php',
      10 => '/ipp-php/core/FileSourceReader.php',
      11 => '/ipp-php/core/Settings.php',
      12 => '/ipp-php/core/StreamWriter.php',
      13 => '/ipp-php/student/Interpreter.php',
      14 => '/ipp-php/student/Stack.php',
      15 => '/ipp-php/student/abstractTypes.php',
      16 => '/ipp-php/student/interpretException.php',
      17 => '/ipp-php/student/stack.php',
    ),
  ),
  '/ipp-php/core/Exception/InputFileException.php' => 
  array (
    'fileHash' => 'f5f89c440c2eefa3a95457bbdc9da00b46d8e2ca',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/FileInputReader.php',
      1 => '/ipp-php/core/FileSourceReader.php',
    ),
  ),
  '/ipp-php/core/Exception/IntegrationException.php' => 
  array (
    'fileHash' => '62301e8c3f6051bba5badab15df32f833490aa29',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
    ),
  ),
  '/ipp-php/core/Exception/InternalErrorException.php' => 
  array (
    'fileHash' => '3126965e7899f4864ec598fc260e78ac940f7b0b',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
      1 => '/ipp-php/core/Exception/ExecuteReturnCodeException.php',
      2 => '/ipp-php/core/Exception/NotImplementedException.php',
      3 => '/ipp-php/core/FileInputReader.php',
      4 => '/ipp-php/core/StreamWriter.php',
      5 => '/ipp-php/student/Stack.php',
      6 => '/ipp-php/student/abstractTypes.php',
      7 => '/ipp-php/student/stack.php',
    ),
  ),
  '/ipp-php/core/Exception/NotImplementedException.php' => 
  array (
    'fileHash' => 'b0301c494588e0ce16d32c27a33c5e455a30583e',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
      1 => '/ipp-php/core/FileInputReader.php',
      2 => '/ipp-php/core/StreamWriter.php',
    ),
  ),
  '/ipp-php/core/Exception/OutputFileException.php' => 
  array (
    'fileHash' => '2257891a414ea6083ec98523415aee5937e86a9f',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/StreamWriter.php',
    ),
  ),
  '/ipp-php/core/Exception/ParameterException.php' => 
  array (
    'fileHash' => '77aeadd623141e4a4fc9c3d72f93c30a1508f952',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Settings.php',
    ),
  ),
  '/ipp-php/core/Exception/XMLException.php' => 
  array (
    'fileHash' => '4f8929b99ccb3115d5605fa8591f235d422a9c04',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/FileSourceReader.php',
    ),
  ),
  '/ipp-php/core/FileInputReader.php' => 
  array (
    'fileHash' => 'eabd92e6f85444ceacb070275672cec09818d823',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Settings.php',
    ),
  ),
  '/ipp-php/core/FileSourceReader.php' => 
  array (
    'fileHash' => '7107d256bc0fe74507b56056ef47aeb769c8a078',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Settings.php',
    ),
  ),
  '/ipp-php/core/Interface/InputReader.php' => 
  array (
    'fileHash' => 'b6af6a75933ac93b163ea4005df040fbed286090',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/AbstractInterpreter.php',
      1 => '/ipp-php/core/FileInputReader.php',
      2 => '/ipp-php/core/Settings.php',
      3 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/core/Interface/OutputWriter.php' => 
  array (
    'fileHash' => 'cadb66a2d9d6c7736998048b17a445dd5768c43a',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/AbstractInterpreter.php',
      1 => '/ipp-php/core/Settings.php',
      2 => '/ipp-php/core/StreamWriter.php',
    ),
  ),
  '/ipp-php/core/Interface/SourceReader.php' => 
  array (
    'fileHash' => '7ee9052e0df14b0356cfc573d96b56e05e925396',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/AbstractInterpreter.php',
      1 => '/ipp-php/core/FileSourceReader.php',
      2 => '/ipp-php/core/Settings.php',
      3 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/core/ReturnCode.php' => 
  array (
    'fileHash' => 'faf757f5d2ed5b0d7fee3397aee4ed2b9eff79c3',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Engine.php',
      1 => '/ipp-php/core/Exception/InputFileException.php',
      2 => '/ipp-php/core/Exception/IntegrationException.php',
      3 => '/ipp-php/core/Exception/InternalErrorException.php',
      4 => '/ipp-php/core/Exception/OutputFileException.php',
      5 => '/ipp-php/core/Exception/ParameterException.php',
      6 => '/ipp-php/core/Exception/XMLException.php',
      7 => '/ipp-php/core/Settings.php',
    ),
  ),
  '/ipp-php/core/Settings.php' => 
  array (
    'fileHash' => '15d271b6bc536e01c180e45317e0cb9cae5dd6c0',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/AbstractInterpreter.php',
      1 => '/ipp-php/core/Engine.php',
    ),
  ),
  '/ipp-php/core/StreamWriter.php' => 
  array (
    'fileHash' => 'a64bda2f8ca523e08dba9ae7448481a7599dc2ef',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/core/Settings.php',
    ),
  ),
  '/ipp-php/student/Frame.php' => 
  array (
    'fileHash' => 'e4e025ebef2316f5e314f39089e1ead5a1fa7b20',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/Interpreter.php' => 
  array (
    'fileHash' => '3b6b8555c378662e5a9157521bda22a7c422c46c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/ipp-php/student/Stack.php' => 
  array (
    'fileHash' => '8da6739948e60a435a7f08001b87856ec8a55345',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/Variable.php' => 
  array (
    'fileHash' => 'b19c5e870db4f125802a0b8360aad6d57741bdda',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Frame.php',
      1 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/arg.php' => 
  array (
    'fileHash' => '326208b86583eb257cc67c6a744574bf26d0f5b2',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
      1 => '/ipp-php/student/inst.php',
    ),
  ),
  '/ipp-php/student/functions.php' => 
  array (
    'fileHash' => '6dda14653eb944373e55ff60aa57c50500ed3dd5',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/inst.php' => 
  array (
    'fileHash' => '24a284055c4cde5c3534cce354606c2d18abfd36',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/interpretException.php' => 
  array (
    'fileHash' => '1a8099187e313915f1c5fb576b02286bd2598c1a',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/opcodeCheck.php' => 
  array (
    'fileHash' => '7e2467e1ab9c787865adeda2f28ec0c48639a22c',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/preProcess.php' => 
  array (
    'fileHash' => '30320137c04f08d8736f8d7e783e51d0cb89ac75',
    'dependentFiles' => 
    array (
      0 => '/ipp-php/student/Interpreter.php',
    ),
  ),
  '/ipp-php/student/stack.php' => 
  array (
    'fileHash' => '8da6739948e60a435a7f08001b87856ec8a55345',
    'dependentFiles' => 
    array (
    ),
  ),
  '/ipp-php/student/umlT.php' => 
  array (
    'fileHash' => '5f14d0c093c66b994775e5b494a6db7c0ebc1b65',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/ipp-php/core/AbstractInterpreter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\AbstractInterpreter',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Base abstract class for \\IPP\\Student\\Interpreter that defines its constructor and required methods
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'inputreader' => 'IPP\\Core\\Interface\\InputReader',
          'outputwriter' => 'IPP\\Core\\Interface\\OutputWriter',
          'sourcereader' => 'IPP\\Core\\Interface\\SourceReader',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'source',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Core\\Interface\\SourceReader',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'input',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Core\\Interface\\InputReader',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'stdout',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Core\\Interface\\OutputWriter',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'stderr',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Core\\Interface\\OutputWriter',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'settings',
               'type' => 'IPP\\Core\\Settings',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'init',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Engine.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Engine',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Engine guides the execution of the script and handles IPP exceptions.
 * 
 * Notes:
 * - class \\IPP\\Student\\Interpreter is required and it has to be a subclass of \\IPP\\Core\\AbstractInterpreter
 * - class \\IPP\\Student\\Settings is optional and if it exists, it has to be a subclass of \\IPP\\Core\\Settings
 * - method execute() of \\IPP\\Student\\Interpreter has to return only valid IPPcode24 return codes (0-9)
 * - error return codes has to be raised as an exception that is a subclass of \\IPP\\Core\\Exception\\IPPException
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'executereturncodeexception' => 'IPP\\Core\\Exception\\ExecuteReturnCodeException',
          'integrationexception' => 'IPP\\Core\\Exception\\IntegrationException',
          'ippexception' => 'IPP\\Core\\Exception\\IPPException',
          'notimplementedexception' => 'IPP\\Core\\Exception\\NotImplementedException',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/ExecuteReturnCodeException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\ExecuteReturnCodeException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for invalid return values from \\IPP\\Student\\Interpreter
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\InternalErrorException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/IPPException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\IPPException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Base for IPP exceptions that are handled in \\IPP\\Core\\Engine
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'exception' => 'Exception',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'Exception',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'showTrace',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getReport',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/InputFileException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\InputFileException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for input file errors
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/IntegrationException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\IntegrationException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for ill-defined student classes
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/InternalErrorException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\InternalErrorException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for various internal errors
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/NotImplementedException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\NotImplementedException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * This exception indicates that a given functionality is not implemented
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\InternalErrorException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/OutputFileException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\OutputFileException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for output file errors
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/ParameterException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\ParameterException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for invalid command-line parameters
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Exception/XMLException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Exception\\XMLException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception for an invalid source XML
 */',
         'namespace' => 'IPP\\Core\\Exception',
         'uses' => 
        array (
          'returncode' => 'IPP\\Core\\ReturnCode',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/FileInputReader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\FileInputReader',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Input reader that reads from a file
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'inputfileexception' => 'IPP\\Core\\Exception\\InputFileException',
          'notimplementedexception' => 'IPP\\Core\\Exception\\NotImplementedException',
          'inputreader' => 'IPP\\Core\\Interface\\InputReader',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'IPP\\Core\\Interface\\InputReader',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resource',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var resource */',
             'namespace' => 'IPP\\Core',
             'uses' => 
            array (
              'inputfileexception' => 'IPP\\Core\\Exception\\InputFileException',
              'notimplementedexception' => 'IPP\\Core\\Exception\\NotImplementedException',
              'inputreader' => 'IPP\\Core\\Interface\\InputReader',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'file',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readInt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readBool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readFloat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/FileSourceReader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\FileSourceReader',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Source reader that reads from a file
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'domdocument' => 'DOMDocument',
          'inputfileexception' => 'IPP\\Core\\Exception\\InputFileException',
          'xmlexception' => 'IPP\\Core\\Exception\\XMLException',
          'sourcereader' => 'IPP\\Core\\Interface\\SourceReader',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'IPP\\Core\\Interface\\SourceReader',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'content',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'file',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDOMDocument',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DOMDocument',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Interface/InputReader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'IPP\\Core\\Interface\\InputReader',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Common interface for input readers
 */',
         'namespace' => 'IPP\\Core\\Interface',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readInt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readBool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readFloat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/ipp-php/core/Interface/OutputWriter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'IPP\\Core\\Interface\\OutputWriter',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Common interface for output writers
 */',
         'namespace' => 'IPP\\Core\\Interface',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeInt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeBool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeFloat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/ipp-php/core/Interface/SourceReader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'IPP\\Core\\Interface\\SourceReader',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Common interface for source readers
 */',
         'namespace' => 'IPP\\Core\\Interface',
         'uses' => 
        array (
          'domdocument' => 'DOMDocument',
        ),
         'constUses' => 
        array (
        ),
      )),
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDOMDocument',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'DOMDocument',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/ipp-php/core/ReturnCode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\ReturnCode',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Common script return codes from the project specification
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'OK',
               'value' => '0',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'PARAMETER_ERROR',
               'value' => '10',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INPUT_FILE_ERROR',
               'value' => '11',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'OUTPUT_FILE_ERROR',
               'value' => '12',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INVALID_XML_ERROR',
               'value' => '31',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INVALID_SOURCE_STRUCTURE',
               'value' => '32',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'SEMANTIC_ERROR',
               'value' => '52',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'OPERAND_TYPE_ERROR',
               'value' => '53',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'VARIABLE_ACCESS_ERROR',
               'value' => '54',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'FRAME_ACCESS_ERROR',
               'value' => '55',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'VALUE_ERROR',
               'value' => '56',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'OPERAND_VALUE_ERROR',
               'value' => '57',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'STRING_OPERATION_ERROR',
               'value' => '58',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INTEGRATION_ERROR',
               'value' => '88',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INTERNAL_ERROR',
               'value' => '99',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/Settings.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\Settings',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * This class handles command-line parameters and prepares appropriate I/O objects.
 * It is possible to extend this class in \\IPP\\Student\\Settings.
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'parameterexception' => 'IPP\\Core\\Exception\\ParameterException',
          'inputreader' => 'IPP\\Core\\Interface\\InputReader',
          'outputwriter' => 'IPP\\Core\\Interface\\OutputWriter',
          'sourcereader' => 'IPP\\Core\\Interface\\SourceReader',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'longOptions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var string[] */',
             'namespace' => 'IPP\\Core',
             'uses' => 
            array (
              'parameterexception' => 'IPP\\Core\\Exception\\ParameterException',
              'inputreader' => 'IPP\\Core\\Interface\\InputReader',
              'outputwriter' => 'IPP\\Core\\Interface\\OutputWriter',
              'sourcereader' => 'IPP\\Core\\Interface\\SourceReader',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'help',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'source',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'input',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processArgs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHelpString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isHelp',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSourceReader',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'IPP\\Core\\Interface\\SourceReader',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInputReader',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'IPP\\Core\\Interface\\InputReader',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStdOutWriter',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'IPP\\Core\\Interface\\OutputWriter',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getStdErrWriter',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'IPP\\Core\\Interface\\OutputWriter',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/core/StreamWriter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Core\\StreamWriter',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Output writer that writes to a stream
 */',
         'namespace' => 'IPP\\Core',
         'uses' => 
        array (
          'notimplementedexception' => 'IPP\\Core\\Exception\\NotImplementedException',
          'outputfileexception' => 'IPP\\Core\\Exception\\OutputFileException',
          'outputwriter' => 'IPP\\Core\\Interface\\OutputWriter',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'IPP\\Core\\Interface\\OutputWriter',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param resource $stream */',
             'namespace' => 'IPP\\Core',
             'uses' => 
            array (
              'notimplementedexception' => 'IPP\\Core\\Exception\\NotImplementedException',
              'outputfileexception' => 'IPP\\Core\\Exception\\OutputFileException',
              'outputwriter' => 'IPP\\Core\\Interface\\OutputWriter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'stream',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkResult',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'result',
               'type' => 'int|false',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeString',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeInt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeBool',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'writeFloat',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/Frame.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\Frame',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'map',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var Variable[]
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param Variable[] $init
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'init',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addVar',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a variable to the frame\'s map.
     *
     * @param string $varName The name of the variable to add.
     *
     * @return void
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'varName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'assignValue',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Assign a value to a variable in the frame\'s map.
     *
     * @param Variable $symb The variable with the value to assign.
     *
     * @return void
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'symb',
               'type' => 'IPP\\Student\\Variable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getVar',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'IPP\\Student\\Variable',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clearContent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Clear the content of the frame.
     *
     * @return void
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'inFrame',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/Interpreter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\Interpreter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\AbstractInterpreter',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'IPP\\Student\\Functions',
        1 => 'IPP\\Student\\preProcess',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxOrder',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'i',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'numOfInstr',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'instructions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var \\DOMNodeList<\\DOMElement> $instructions
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'domdocument' => 'DOMDocument',
              'abstractinterpreter' => 'IPP\\Core\\AbstractInterpreter',
              'domnodelist' => 'DOMNodeList',
              'domelement' => 'DOMElement',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'program',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var \\DOMNodeList<\\DOMElement> $program
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'domdocument' => 'DOMDocument',
              'abstractinterpreter' => 'IPP\\Core\\AbstractInterpreter',
              'domnodelist' => 'DOMNodeList',
              'domelement' => 'DOMElement',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'args',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var \\DOMNodeList<\\DOMElement> $args
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'domdocument' => 'DOMDocument',
              'abstractinterpreter' => 'IPP\\Core\\AbstractInterpreter',
              'domnodelist' => 'DOMNodeList',
              'domelement' => 'DOMElement',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'numArgs',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'FS',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Student\\Stack',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'CallS',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Student\\Stack',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'DataS',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Student\\Stack',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'GF',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Student\\Frame',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'TF',
          ),
           'phpDoc' => NULL,
           'type' => '?IPP\\Student\\Frame',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'LF',
          ),
           'phpDoc' => NULL,
           'type' => '?IPP\\Student\\Frame',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dom',
          ),
           'phpDoc' => NULL,
           'type' => 'DOMDocument',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'opcodeCheckObj',
          ),
           'phpDoc' => NULL,
           'type' => 'IPP\\Student\\opcodeCheck',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'labelmap',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string,int> $labelmap
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'domdocument' => 'DOMDocument',
              'abstractinterpreter' => 'IPP\\Core\\AbstractInterpreter',
              'domnodelist' => 'DOMNodeList',
              'domelement' => 'DOMElement',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'instMap',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var inst[] Array of inst class objects.
     * This array maps instruction names to their respective inst class objects.
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'domdocument' => 'DOMDocument',
              'abstractinterpreter' => 'IPP\\Core\\AbstractInterpreter',
              'domnodelist' => 'DOMNodeList',
              'domelement' => 'DOMElement',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/Stack.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\Stack',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'stack',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @var mixed[] */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @param mixed[] $init The initial array to initialize the stack. */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'init',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'push',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param mixed $item The item to push onto the stack.
     * @return void
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'item',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pop',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Removes and returns the first element from the stack.
     * 
     * @return mixed|null The first element from the stack, or null if the stack is empty.
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'top',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the top element of the stack.
     * 
     * @return mixed|false The top element of the stack, or false if the stack is empty.
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEmpty',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if the stack is empty.
     * 
     * @return bool True if the stack is empty, false otherwise.
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/Variable.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\Variable',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'val',
          ),
           'phpDoc' => NULL,
           'type' => 'string|int|bool|float|null',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => NULL,
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param string $name
     * @param string|int|bool|float|null $val
     * @param string|null $type
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'val',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/arg.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\arg',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'val',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/functions.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'IPP\\Student\\Functions',
    )),
  ),
  '/ipp-php/student/inst.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\inst',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'opcode',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'args',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var arg[] Array of arg objects
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
              'internalerrorexception' => 'IPP\\Core\\Exception\\InternalErrorException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/interpretException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\interpretException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'IPP\\Core\\Exception\\IPPException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mess',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/opcodeCheck.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'IPP\\Student\\opcodeCheck',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'opcodeMap',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, int> The opcode map containing opcode names as keys and their corresponding number of arguments as values.
     */',
             'namespace' => 'IPP\\Student',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/ipp-php/student/preProcess.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'IPP\\Student\\preProcess',
    )),
  ),
  '/ipp-php/student/umlT.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'IPP\\Student\\umlT',
    )),
  ),
); },
];
