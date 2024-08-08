import React from 'react';

const ImageUploader = ({ handleImageUpload }) => {
  const handleFileChange = (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.onloadend = () => {
      handleImageUpload(reader.result);
    };
    reader.readAsDataURL(file);
  };

  return (
    <div className="mb-4">
      <label className="block mb-1">Upload Image:</label>
      <input type="file" accept="image/*" onChange={handleFileChange} />
    </div>
  );
};

export default ImageUploader;
