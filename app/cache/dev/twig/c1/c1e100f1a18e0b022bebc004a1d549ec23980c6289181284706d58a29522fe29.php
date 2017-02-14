<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7089eddfc1fcceef0bcbadc163789a766833a20486ce1f68ba921df7e41d7927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_595fff7b9b3ce27ef752643d00b1dfd64fd2cd7dfc0d0dbd87a3a183299f9b29 = $this->env->getExtension("native_profiler");
        $__internal_595fff7b9b3ce27ef752643d00b1dfd64fd2cd7dfc0d0dbd87a3a183299f9b29->enter($__internal_595fff7b9b3ce27ef752643d00b1dfd64fd2cd7dfc0d0dbd87a3a183299f9b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595fff7b9b3ce27ef752643d00b1dfd64fd2cd7dfc0d0dbd87a3a183299f9b29->leave($__internal_595fff7b9b3ce27ef752643d00b1dfd64fd2cd7dfc0d0dbd87a3a183299f9b29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddb71a99bfd785c660a11542ba68bf4335b615693d130ac1b2662ce364c53d05 = $this->env->getExtension("native_profiler");
        $__internal_ddb71a99bfd785c660a11542ba68bf4335b615693d130ac1b2662ce364c53d05->enter($__internal_ddb71a99bfd785c660a11542ba68bf4335b615693d130ac1b2662ce364c53d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ddb71a99bfd785c660a11542ba68bf4335b615693d130ac1b2662ce364c53d05->leave($__internal_ddb71a99bfd785c660a11542ba68bf4335b615693d130ac1b2662ce364c53d05_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
