package com.example.julienlegales.webserviceandroid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import java.util.ArrayList;
import java.util.concurrent.ExecutionException;

public class TestActivity extends AppCompatActivity {
    ListView lvListe;
    ArrayList<Test> listeTest;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_test);
        lvListe=(ListView) findViewById(R.id.listTest);
        listeTest = new ArrayList<Test>();
        try {
            listeTest = new ListTest().execute().get();
        } catch (InterruptedException e) {
            e.printStackTrace();
        } catch (ExecutionException e) {
            e.printStackTrace();
        }

    }


    @Override
    protected void onResume() {
        super.onResume();
        AdapterTest adapterTest = new AdapterTest(this,listeTest);
        lvListe.setAdapter(adapterTest);
    }
}
