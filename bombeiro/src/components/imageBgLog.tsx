import { View, StyleSheet, Image } from 'react-native'
import React from 'react'

const Styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    image: {
        justifyContent: "center",
        alignItems: "center",
        zIndex: -1,

    }
})
export const DisplayAnImage = () => {
    return (
        <View style={Styles.container}>
            <Image source={require('../assets/images/loginImg.png')} resizeMode='cover' style={Styles.image} />
        </View>
    )
}
