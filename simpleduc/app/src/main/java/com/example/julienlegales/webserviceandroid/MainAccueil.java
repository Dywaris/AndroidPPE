package com.example.julienlegales.webserviceandroid;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainAccueil extends AppCompatActivity {

    private Button btTheme;
    private Button btTest;
    private Button btTestUtilisateur;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_accueil);

        btTheme = findViewById(R.id.buttonTheme);
        btTest = findViewById(R.id.buttonTest);
        btTestUtilisateur = findViewById(R.id.buttonTestUtilisateur);

        btTheme.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainAccueil.this,MainActivity.class);
                startActivity(intent);
            }
        });

        btTest.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainAccueil.this,TestActivity.class);
                startActivity(intent);
            }
        });
        btTestUtilisateur.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainAccueil.this,TestUtilisateurActivity.class);
                startActivity(intent);
            }
        });

    }
}
