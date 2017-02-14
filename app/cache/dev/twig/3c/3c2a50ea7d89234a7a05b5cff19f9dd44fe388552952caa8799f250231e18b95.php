<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_712792e80c9e0e7aa61838eac001ced94eb63915c855d000495861e8f4914315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_00b16f1e1e3dcc1759cd171d058bf478f9e61d6008782e3c19cda978aff61487 = $this->env->getExtension("native_profiler");
        $__internal_00b16f1e1e3dcc1759cd171d058bf478f9e61d6008782e3c19cda978aff61487->enter($__internal_00b16f1e1e3dcc1759cd171d058bf478f9e61d6008782e3c19cda978aff61487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b16f1e1e3dcc1759cd171d058bf478f9e61d6008782e3c19cda978aff61487->leave($__internal_00b16f1e1e3dcc1759cd171d058bf478f9e61d6008782e3c19cda978aff61487_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3295cbe56375ee864cba14fd154675333edd9402c280ffcbbcaf1c35d67980aa = $this->env->getExtension("native_profiler");
        $__internal_3295cbe56375ee864cba14fd154675333edd9402c280ffcbbcaf1c35d67980aa->enter($__internal_3295cbe56375ee864cba14fd154675333edd9402c280ffcbbcaf1c35d67980aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3295cbe56375ee864cba14fd154675333edd9402c280ffcbbcaf1c35d67980aa->leave($__internal_3295cbe56375ee864cba14fd154675333edd9402c280ffcbbcaf1c35d67980aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
