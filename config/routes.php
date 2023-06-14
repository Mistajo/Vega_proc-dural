<?php

    get("/", ["testController", "index"]);

    get("/hello", ["testController", "toGreat"]);
