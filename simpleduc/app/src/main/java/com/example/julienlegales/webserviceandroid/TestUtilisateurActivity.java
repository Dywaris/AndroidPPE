package com.example.julienlegales.webserviceandroid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.concurrent.ExecutionException;

public class TestUtilisateurActivity extends AppCompatActivity {

    ListView lvListe;
    ArrayList<TestUtilisateur> listeTestUtilisateur;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_test_utilisateur);

        lvListe = findViewById(R.id.listTestUtilisateur);
        listeTestUtilisateur = new ArrayList<TestUtilisateur>();
        try {
            listeTestUtilisateur = new ListTestUtilisateur().execute().get();
        } catch (InterruptedException e) {
            e.printStackTrace();
        } catch (ExecutionException e) {
            e.printStackTrace();
        }

    }

    @Override
    protected void onResume() {
        super.onResume();
        AdapterTestUtilisateur adapterTestUtilisateur = new AdapterTestUtilisateur(this, listeTestUtilisateur);
        lvListe.setAdapter(adapterTestUtilisateur);
    }

}
