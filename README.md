# grumphp-extra-task

### grumphp.yml:

````yml
parameters:
    tasks:
        php_cs:
            bin: /usr/local/bin/phpcs
            standard: []
            severity: ~
            error_severity: ~
            warning_severity: ~
            tab_width: ~
            report: full
            report_width: ~
            whitelist_patterns: []
            encoding: ~
            ignore_patterns: []
            sniffs: []
            triggered_by: [php]
            exclude: []
    extensions:
        - HD\GrumPhpExtraTask\ExtensionLoader
````

### Composer

``composer require danghieu90/grumphp-extra-task``
