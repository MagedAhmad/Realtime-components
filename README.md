## ONLINE COMPONENTS 
[![Build Status](https://travis-ci.org/MagedAhmad/Realtime-components.svg?branch=master)](https://travis-ci.org/MagedAhmad/Realtime-components)

A service to share code snippets and components

### ABOUT 

Project is originally built for learning porpuses. it's like <a target="_blank" href="https://codepen.io/">codepen</a>. Used <a target="_blank" href="https://codemirror.net/">CodeMirror</a> to ship the online text editor.

Technologies: Laravel, Vue.


### INSTALLATION
```
composer install
cp .env.example .env
npm install
php artisan migrate
```


### ROAD MAP

- [x] Build UI (Using tailwindcss).
- [ ] Search through components.
- [ ] Build an Api.
- [ ] Following.
- [ ] Deactive Users Profile. 
- [ ] Notifications system.
- [ ] Authentication with google/github.
- [ ] Ad area & Payment with stripe.
- Admin-panel
    - [ ] Multi authentication.
    - [ ] General statistics & graphs.

More features to come ... 

### Contribution 

If you want to contribute <b>make sure</b> that 

- All tests are passing.
- Cover your code with unit tests.
- Open new Issue describing the bug/new-feature .
- Push a pull request to solve the issue.


### License 
It's an open source project licensed under <a href="https://opensource.org/licenses/MIT">MIT license</a>.