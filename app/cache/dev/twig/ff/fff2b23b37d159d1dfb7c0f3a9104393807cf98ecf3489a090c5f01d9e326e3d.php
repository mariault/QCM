<?php

/* base.html.twig */
class __TwigTemplate_de06180951731aee203591ecef202abdf62c0138288327fda69bae8c1650ff34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0d8e2a90a9b28162bc71d3db7b54b8c709e2eb2c576d609fea94080d61d9c0 = $this->env->getExtension("native_profiler");
        $__internal_2c0d8e2a90a9b28162bc71d3db7b54b8c709e2eb2c576d609fea94080d61d9c0->enter($__internal_2c0d8e2a90a9b28162bc71d3db7b54b8c709e2eb2c576d609fea94080d61d9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2c0d8e2a90a9b28162bc71d3db7b54b8c709e2eb2c576d609fea94080d61d9c0->leave($__internal_2c0d8e2a90a9b28162bc71d3db7b54b8c709e2eb2c576d609fea94080d61d9c0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d14daf11efc9bcfc91f95e5e4ebc239f05e49363d02d7ac4e568fb910e4bece0 = $this->env->getExtension("native_profiler");
        $__internal_d14daf11efc9bcfc91f95e5e4ebc239f05e49363d02d7ac4e568fb910e4bece0->enter($__internal_d14daf11efc9bcfc91f95e5e4ebc239f05e49363d02d7ac4e568fb910e4bece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_d14daf11efc9bcfc91f95e5e4ebc239f05e49363d02d7ac4e568fb910e4bece0->leave($__internal_d14daf11efc9bcfc91f95e5e4ebc239f05e49363d02d7ac4e568fb910e4bece0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_604af9570d536c999b08ff512746e553357db6820dd95fc602d8b2ffc34d617e = $this->env->getExtension("native_profiler");
        $__internal_604af9570d536c999b08ff512746e553357db6820dd95fc602d8b2ffc34d617e->enter($__internal_604af9570d536c999b08ff512746e553357db6820dd95fc602d8b2ffc34d617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_604af9570d536c999b08ff512746e553357db6820dd95fc602d8b2ffc34d617e->leave($__internal_604af9570d536c999b08ff512746e553357db6820dd95fc602d8b2ffc34d617e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fe1d9783a7baba416065d11fc6506abec50dc76a64b84c31c866295b654c9c = $this->env->getExtension("native_profiler");
        $__internal_33fe1d9783a7baba416065d11fc6506abec50dc76a64b84c31c866295b654c9c->enter($__internal_33fe1d9783a7baba416065d11fc6506abec50dc76a64b84c31c866295b654c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_33fe1d9783a7baba416065d11fc6506abec50dc76a64b84c31c866295b654c9c->leave($__internal_33fe1d9783a7baba416065d11fc6506abec50dc76a64b84c31c866295b654c9c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ce7ee1597928066dd9d49b56ec8ea17ad9bf8e53e4ce91e9b150febc1d99fea = $this->env->getExtension("native_profiler");
        $__internal_1ce7ee1597928066dd9d49b56ec8ea17ad9bf8e53e4ce91e9b150febc1d99fea->enter($__internal_1ce7ee1597928066dd9d49b56ec8ea17ad9bf8e53e4ce91e9b150febc1d99fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ce7ee1597928066dd9d49b56ec8ea17ad9bf8e53e4ce91e9b150febc1d99fea->leave($__internal_1ce7ee1597928066dd9d49b56ec8ea17ad9bf8e53e4ce91e9b150febc1d99fea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QCM{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}Hello QCM{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
