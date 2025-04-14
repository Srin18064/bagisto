# Custom Bagisto Theme

## Overview
This repository contains a custom theme for the Bagisto eCommerce platform. The theme is designed to enhance the visual appeal and functionality of the online store.

## Directory Structure
The theme is organized as follows:

```
bagisto-custom-theme/
├── themes/
│   └── CustomTheme/
│       ├── assets/
│       │   ├── css/
│       │   │   └── style.css        # Custom CSS styles
│       │   ├── js/
│       │   │   └── script.js        # Custom JavaScript code
│       │   └── images/              # Image assets
│       ├── views/
│       │   ├── layouts/
│       │   │   └── master.blade.php # Main layout template
│       │   ├── home/
│       │   │   └── index.blade.php  # Home page view
│       │   └── products/
│       │       └── view.blade.php   # Product detail view
│       └── theme.json               # Theme metadata
├── composer.json                    # Composer configuration
└── README.md                        # Project documentation
```

## Installation
1. Clone the repository to your local development environment.
2. Navigate to the `bagisto-custom-theme` directory.
3. Run `composer install` to install the necessary dependencies.
4. Configure the theme in your Bagisto installation by adding it to the themes directory.

## Usage
- To use the custom theme, select it from the Bagisto admin panel under the theme settings.
- Customize the styles and scripts as needed by editing the files in the `assets` directory.
- Modify the view templates in the `views` directory to change the layout and content of your store.

## Contributing
Feel free to submit issues or pull requests for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.