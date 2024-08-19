package com.proyekapi.proyekapi.services;

import com.proyekapi.proyekapi.entities.Lokasi;
import com.proyekapi.proyekapi.repositories.LokasiRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@RequiredArgsConstructor
public class LokasiService {

    private final LokasiRepository lokasiRepository;

    public Lokasi saveLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public List<Lokasi> getAllLokasi() {
        return lokasiRepository.findAll();
    }

    public Lokasi updateLokasi(Integer id, Lokasi lokasiDetails) {
        Lokasi lokasi = lokasiRepository.findById(id)
                .orElseThrow(() -> new RuntimeException("Lokasi not found with id: " + id));

        lokasi.setNamaLokasi(lokasiDetails.getNamaLokasi());
        lokasi.setNegara(lokasiDetails.getNegara());
        lokasi.setProvinsi(lokasiDetails.getProvinsi());
        lokasi.setKota(lokasiDetails.getKota());

        return lokasiRepository.save(lokasi);
    }

    public void deleteLokasi(Integer id) {
        lokasiRepository.deleteById(id);
    }
}
