package com.codedr.parlor.controller;

import com.codedr.parlor.constant.AppConstant;
import com.codedr.parlor.entity.User;
import com.codedr.parlor.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping(value = AppConstant.API + AppConstant.API_VERSION, produces = AppConstant.APPLICATION_JSON)
public class AuthController {


    @Autowired
    UserService userService;

    @RequestMapping(value = AppConstant.REGISTER_ACCOUNT, method = RequestMethod.POST, produces = AppConstant.APPLICATION_JSON)
    public ResponseEntity<?> registerUser(@RequestBody User user){
        userService.registerNewUser(user);
        return ResponseEntity.ok("Account created");
    }

    @RequestMapping(value = AppConstant.ACCOUNT_LOGIN, method = RequestMethod.GET, produces = AppConstant.APPLICATION_JSON)
    public ResponseEntity<User> accountLogin(@RequestParam("email") String email, @RequestParam("password") String password){
        return ResponseEntity.ok(userService.validateUser(email, password));
    }

}

