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
import java.util.List;

public class AdapterTestUtilisateur extends ArrayAdapter<TestUtilisateur> {

    Context context;

    public AdapterTestUtilisateur(Context context, ArrayList<TestUtilisateur> listeTestUtilisateur) {
        super(context, -1, listeTestUtilisateur);
        this.context = context;
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View view;

        TestUtilisateur unTestUtilisateur;

        view = null;
        if (convertView==null){
            LayoutInflater layoutInflater = (LayoutInflater) this.context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view = layoutInflater.inflate(R.layout.ligne_test_utilisateur,parent, false);
        }
        else{
            view = convertView;
        }
        unTestUtilisateur = getItem(position);

        TextView textDate = view.findViewById(R.id.date);
        TextView textLibelle = view.findViewById(R.id.libelle);
        TextView textNom = view.findViewById(R.id.nom);
        TextView textPrenom = view.findViewById(R.id.prenom);

        textDate.setText(unTestUtilisateur.getDate());
        textLibelle.setText(unTestUtilisateur.getLibelle());
        textNom.setText(unTestUtilisateur.getNom());
        textPrenom.setText(unTestUtilisateur.getPrenom());

        return view;
    }
}
