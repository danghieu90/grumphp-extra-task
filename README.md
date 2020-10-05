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
        es_lint:
            bin: node_modules/.bin/eslint
            triggered_by: [js, jsx, ts, tsx, vue]
            whitelist_patterns:
                - /^resources\/js\/(.*)/
            config: .eslintrc.json
            debug: false
            format: ~
            max_warnings: ~
            no_eslintrc: false
            quiet: false
    extensions:
        - HD\GrumPhpExtraTask\ExtensionLoader
````

### Composer

``composer require danghieu90/grumphp-extra-task``
