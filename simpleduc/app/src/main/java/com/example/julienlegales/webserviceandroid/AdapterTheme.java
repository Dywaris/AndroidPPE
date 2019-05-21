package com.example.julienlegales.webserviceandroid;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by julienlegales on 23/03/2018.
 */

public class AdapterTheme extends ArrayAdapter<Theme> {

    Context context;

    public AdapterTheme(Context context, ArrayList<Theme> listeTheme) {
        super(context, -1, listeTheme);
        this.context = context;
    }


    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View view;

        Theme unTheme;

        view = null;
        if (convertView==null){
            LayoutInflater layoutInflater = (LayoutInflater) this.context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view = layoutInflater.inflate(R.layout.liste_ligne,parent, false);
        }
        else{
            view = convertView;
        }
        unTheme = getItem(position);
        TextView texteListe = (TextView) view.findViewById(R.id.texteLigne);
        TextView textId = (TextView) view.findViewById(R.id.id);
        textId.setText(String.valueOf(unTheme.getId()));
        texteListe.setText(unTheme.getLibelle());
        return view;
    }


}


