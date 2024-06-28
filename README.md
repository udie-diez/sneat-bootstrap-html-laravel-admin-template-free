## Installation ⚒️

Installing and running is super easy, please Follow below steps and you will be ready to rock 🤘

1. Open the terminal in your root directory of Laravel.
2. Use the following command to install the composer

```bash
composer install
```

3. Run the following command to generate the **`.env`** file config

```bash
cp .env.example .env
```

4. Customize all variables within the **`.env`** file based on requirement e.g. _database, mail, debug, etc_. Or you can customize all config files directly in **config** folder.
5. Run the following command to generate the key

```bash
php artisan key:generate
```

4. By running the following command, you will be able to get all the dependencies in your **node_modules** folder:

```bash
yarn
```

5. To run the project, you need to run the following command in the project directory. It will compile JavaScript and Styles.

```bash
yarn dev
```

6. To serve the application, you need to run the following command in the project directory

```bash
php artisan serve
```

7. Now navigate to the given address, and you will see your application is running.🥳

## Available Tasks 🧑‍💻

**Building for Production:** If you want to run the project and make the build in the production mode then run the following command in the root directory, by default The project will continue to run in the development mode:

```bash
yarn prod
```

**Enable debugbar:** The DebugBar will be enabled when **APP_DEBUG** is true. Use the DebugBar only in development.
