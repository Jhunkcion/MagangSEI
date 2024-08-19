package com.proyekapi.proyekapi.services;

import com.proyekapi.proyekapi.entities.Proyek;
import com.proyekapi.proyekapi.repositories.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class ProyekService {

    @Autowired
    private ProyekRepository proyekRepository;

    public Proyek saveProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public List<Proyek> getAllProyek() {
        return proyekRepository.findAll();
    }

    public Proyek updateProyek(Integer id, Proyek proyekDetails) {
        Proyek proyek = proyekRepository.findById(id)
                .orElseThrow(() -> new RuntimeException("Proyek not found with id: " + id));

        proyek.setNamaProyek(proyekDetails.getNamaProyek());
        proyek.setClient(proyekDetails.getClient());
        proyek.setTglMulai(proyekDetails.getTglMulai());
        proyek.setTglSelesai(proyekDetails.getTglSelesai());
        proyek.setPimpinanProyek(proyekDetails.getPimpinanProyek());
        proyek.setKeterangan(proyekDetails.getKeterangan());

        return proyekRepository.save(proyek);
    }

    public void deleteProyek(Integer id) {
        proyekRepository.deleteById(id);
    }
}
