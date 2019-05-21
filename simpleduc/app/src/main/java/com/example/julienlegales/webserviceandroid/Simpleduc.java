package com.example.julienlegales.webserviceandroid;

import java.util.ArrayList;

import retrofit.http.GET;


public interface Simpleduc {
    public static final String url = "http://172.16.196.22/simpleduc/web/app_dev.php";
    @GET("/wsthemes") ArrayList<Theme> listTheme();
    @GET("/wstest") ArrayList<Test> listTest();
    @GET("/wstestutilisateur") ArrayList<TestUtilisateur> listTestUtilisateur();
}
