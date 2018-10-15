const Generator = require('yeoman-generator');

module.exports = class extends Generator {
    // note: arguments and options should be defined in the constructor.
    constructor(args, opts) {
        super(args, opts);

        // This makes `appname` a required argument.
        this.argument('api', { type: String, required: true });
        this.argument('key', { type: String, required: true });

        // And you can then access it later; e.g.
        this.log(this.options.api);
        this.log(this.options.key);
    }

    paths() {
        this.destinationRoot();
        this.destinationPath('index.js');
    }

    writing() {
        const { api, key } = this.options;
        this.fs.copyTpl(
            this.templatePath('config.sample.php'),
            this.destinationPath('index.php'),
            {
                api,
                key,
            }
        )
    }
};
