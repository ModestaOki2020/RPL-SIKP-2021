package com.example.projectuas;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnFailureListener;
import com.google.android.gms.tasks.OnSuccessListener;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.firestore.FirebaseFirestore;

import java.util.HashMap;
import java.util.Map;

public class PengajuanPrakp extends AppCompatActivity {

    FirebaseAuth fAuth;
    FirebaseFirestore fStore;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pengajuan_prakp);

        fAuth = FirebaseAuth.getInstance();
        fStore = FirebaseFirestore.getInstance();

        EditText nim = findViewById(R.id.nimpra);
        EditText tahun = findViewById(R.id.tahunpra);
        EditText semester = findViewById(R.id.semesterpra);
        EditText judul = findViewById(R.id.judulpra);
        EditText pembimbing = findViewById(R.id.pembimbingpra);
        Button kirim = findViewById(R.id.btnKirimData3);


        kirim.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                FirebaseUser firebaseUser = FirebaseAuth.getInstance().getCurrentUser();
                final String current = firebaseUser.getUid();

                Map<String, Object> pengajuanprakp = new HashMap<>();
                pengajuanprakp.put("nim", nim.getText().toString());
                pengajuanprakp.put("tahun", semester.getText().toString());
                pengajuanprakp.put("semester", tahun.getText().toString());
                pengajuanprakp.put("judul", judul.getText().toString());
                pengajuanprakp.put("pembimbing", pembimbing.getText().toString());

                fStore.collection("Daftar UJian KP").document(current).set(pengajuanprakp)
                        .addOnSuccessListener(new OnSuccessListener<Void>() {
                            @Override
                            public void onSuccess(Void aVoid) {
                                Log.d("TAG", "Berhasil : " + current);
                                Toast.makeText(PengajuanPrakp.this, "Data berhasil dikirim", Toast.LENGTH_LONG).show();
                                Intent intent = new Intent(PengajuanPrakp.this, MainActivity.class);
                                startActivity(intent);
                                finish();

                            }
                        })
                        .addOnFailureListener(new OnFailureListener() {
                            @Override
                            public void onFailure(@NonNull Exception e) {
                                Log.d("TAG", e.toString());
                            }
                        });

            }
        });

    }
}
