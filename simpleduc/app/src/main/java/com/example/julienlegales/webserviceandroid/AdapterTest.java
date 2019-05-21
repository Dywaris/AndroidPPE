package com.example.julienlegales.webserviceandroid;

import android.content.Context;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.ArrayList;

public class AdapterTest extends ArrayAdapter<Test> {
    Context context;

    public AdapterTest(Context context, ArrayList<Test> listeTest) {
        super(context, -1, listeTest);
        this.context = context;
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view;

        Test unTest;

        view = null;
        if (convertView==null){
            LayoutInflater layoutInflater = (LayoutInflater) this.context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view = layoutInflater.inflate(R.layout.ligne_test,parent, false);
        }
        else{
            view = convertView;
        }
        unTest = getItem(position);
        TextView textLibelle = view.findViewById(R.id.libelle);
        TextView textId =  view.findViewById(R.id.id);
        TextView textNiveau = view.findViewById(R.id.niveau);
        TextView textTheme = view.findViewById(R.id.theme);

        textId.setText(String.valueOf(unTest.getId()));
        textLibelle.setText(unTest.getLibelle());
        textNiveau.setText(String.valueOf(unTest.getNiveau()));
        textTheme.setText(unTest.getTheme());
        return view;
    }
}
