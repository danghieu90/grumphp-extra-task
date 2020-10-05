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
        php_md:
            bin: /usr/local/bin/phpmd
            whitelist_patterns: []
            exclude: []
            report_format: text
            ruleset: ['cleancode', 'codesize', 'naming']
            triggered_by: ['php']
    extensions:
        - HD\GrumPhpExtraTask\ExtensionLoader
````

### Composer

``composer require danghieu90/grumphp-extra-task``
