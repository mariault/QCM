<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_19361ebe34aca1fd4bc6b9231d2d80806de0c6f078f971250da2397992e49c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bacf3cb3966fde615c335652c6f910d5d5e852f737294057069563465f704320 = $this->env->getExtension("native_profiler");
        $__internal_bacf3cb3966fde615c335652c6f910d5d5e852f737294057069563465f704320->enter($__internal_bacf3cb3966fde615c335652c6f910d5d5e852f737294057069563465f704320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacf3cb3966fde615c335652c6f910d5d5e852f737294057069563465f704320->leave($__internal_bacf3cb3966fde615c335652c6f910d5d5e852f737294057069563465f704320_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90a0125f158ecec0631129b71fca11b166c28a99247c16fd0918da3d46ebb848 = $this->env->getExtension("native_profiler");
        $__internal_90a0125f158ecec0631129b71fca11b166c28a99247c16fd0918da3d46ebb848->enter($__internal_90a0125f158ecec0631129b71fca11b166c28a99247c16fd0918da3d46ebb848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90a0125f158ecec0631129b71fca11b166c28a99247c16fd0918da3d46ebb848->leave($__internal_90a0125f158ecec0631129b71fca11b166c28a99247c16fd0918da3d46ebb848_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88154eb78883599324818cae6c95e608ce0157eeb305846b8fe381680f59c35c = $this->env->getExtension("native_profiler");
        $__internal_88154eb78883599324818cae6c95e608ce0157eeb305846b8fe381680f59c35c->enter($__internal_88154eb78883599324818cae6c95e608ce0157eeb305846b8fe381680f59c35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88154eb78883599324818cae6c95e608ce0157eeb305846b8fe381680f59c35c->leave($__internal_88154eb78883599324818cae6c95e608ce0157eeb305846b8fe381680f59c35c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4320604215fae23a506ef02c2546418dcddc518ca5bd8933172123309d804b0e = $this->env->getExtension("native_profiler");
        $__internal_4320604215fae23a506ef02c2546418dcddc518ca5bd8933172123309d804b0e->enter($__internal_4320604215fae23a506ef02c2546418dcddc518ca5bd8933172123309d804b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4320604215fae23a506ef02c2546418dcddc518ca5bd8933172123309d804b0e->leave($__internal_4320604215fae23a506ef02c2546418dcddc518ca5bd8933172123309d804b0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
