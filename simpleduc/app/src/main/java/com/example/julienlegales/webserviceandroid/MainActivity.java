package com.example.julienlegales.webserviceandroid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.concurrent.ExecutionException;


public class MainActivity extends AppCompatActivity {
    ListView lvListe;
    ArrayList<Theme> listeTheme;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        lvListe=(ListView) findViewById(R.id.lvListe);
        listeTheme = new ArrayList<Theme>();
        try {
            listeTheme = new ListTheme().execute().get();
        } catch (InterruptedException e) {
            e.printStackTrace();
        } catch (ExecutionException e) {
            e.printStackTrace();
        }

    }

    @Override
    protected void onResume() {
        super.onResume();
        AdapterTheme adapterTheme = new AdapterTheme(this, listeTheme);
        lvListe.setAdapter(adapterTheme);
    }
}
