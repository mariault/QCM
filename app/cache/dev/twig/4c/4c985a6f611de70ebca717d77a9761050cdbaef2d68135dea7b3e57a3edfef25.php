<?php

/* ::base.html.twig */
class __TwigTemplate_5a1ff325d6dd48b54cd8601cc861f86a5cd1ed3fefd177c873b00aa8c7fee1cc extends Twig_Template
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
        $__internal_44ee057fdde6e8673f62dc8247f7311d448389f054f3ca4e8c8fae47a7fbff5e = $this->env->getExtension("native_profiler");
        $__internal_44ee057fdde6e8673f62dc8247f7311d448389f054f3ca4e8c8fae47a7fbff5e->enter($__internal_44ee057fdde6e8673f62dc8247f7311d448389f054f3ca4e8c8fae47a7fbff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_44ee057fdde6e8673f62dc8247f7311d448389f054f3ca4e8c8fae47a7fbff5e->leave($__internal_44ee057fdde6e8673f62dc8247f7311d448389f054f3ca4e8c8fae47a7fbff5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b930bd73865e16ea2fdb0b5c11e949c2d53343f03334c0626539f7497520d3bf = $this->env->getExtension("native_profiler");
        $__internal_b930bd73865e16ea2fdb0b5c11e949c2d53343f03334c0626539f7497520d3bf->enter($__internal_b930bd73865e16ea2fdb0b5c11e949c2d53343f03334c0626539f7497520d3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_b930bd73865e16ea2fdb0b5c11e949c2d53343f03334c0626539f7497520d3bf->leave($__internal_b930bd73865e16ea2fdb0b5c11e949c2d53343f03334c0626539f7497520d3bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cafe2b7dae5d8860f63729a9d511375e08b01f08f6586cbcf7a46d92b84c3a2b = $this->env->getExtension("native_profiler");
        $__internal_cafe2b7dae5d8860f63729a9d511375e08b01f08f6586cbcf7a46d92b84c3a2b->enter($__internal_cafe2b7dae5d8860f63729a9d511375e08b01f08f6586cbcf7a46d92b84c3a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cafe2b7dae5d8860f63729a9d511375e08b01f08f6586cbcf7a46d92b84c3a2b->leave($__internal_cafe2b7dae5d8860f63729a9d511375e08b01f08f6586cbcf7a46d92b84c3a2b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e8451e808f140282bf2ef334da3bd0d4be887687ec5b1df5b87e76cc6d0035 = $this->env->getExtension("native_profiler");
        $__internal_f9e8451e808f140282bf2ef334da3bd0d4be887687ec5b1df5b87e76cc6d0035->enter($__internal_f9e8451e808f140282bf2ef334da3bd0d4be887687ec5b1df5b87e76cc6d0035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_f9e8451e808f140282bf2ef334da3bd0d4be887687ec5b1df5b87e76cc6d0035->leave($__internal_f9e8451e808f140282bf2ef334da3bd0d4be887687ec5b1df5b87e76cc6d0035_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c549a56fdf8701a8edb43bfe2381d018e277360f1768dbdba0779be76d4f746 = $this->env->getExtension("native_profiler");
        $__internal_0c549a56fdf8701a8edb43bfe2381d018e277360f1768dbdba0779be76d4f746->enter($__internal_0c549a56fdf8701a8edb43bfe2381d018e277360f1768dbdba0779be76d4f746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c549a56fdf8701a8edb43bfe2381d018e277360f1768dbdba0779be76d4f746->leave($__internal_0c549a56fdf8701a8edb43bfe2381d018e277360f1768dbdba0779be76d4f746_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
