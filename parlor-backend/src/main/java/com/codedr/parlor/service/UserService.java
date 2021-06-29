package com.codedr.parlor.service;

import com.codedr.parlor.entity.User;
import com.codedr.parlor.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserService {

    @Autowired
    UserRepository userRepo;

    public void registerNewUser(User user){
        userRepo.save(user);
    }

    public User validateUser(String email, String password){
        return  null;
    }
}
