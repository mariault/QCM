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
        $__internal_2d1e91ff7348174c494b7bf0ebe59b37e3a1c9911d26ff1706e267895cc2ec78 = $this->env->getExtension("native_profiler");
        $__internal_2d1e91ff7348174c494b7bf0ebe59b37e3a1c9911d26ff1706e267895cc2ec78->enter($__internal_2d1e91ff7348174c494b7bf0ebe59b37e3a1c9911d26ff1706e267895cc2ec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1e91ff7348174c494b7bf0ebe59b37e3a1c9911d26ff1706e267895cc2ec78->leave($__internal_2d1e91ff7348174c494b7bf0ebe59b37e3a1c9911d26ff1706e267895cc2ec78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f35b85ba0e1646180a9bae2f73d853a23edf1b22d8346031e4e070cbdf65d68f = $this->env->getExtension("native_profiler");
        $__internal_f35b85ba0e1646180a9bae2f73d853a23edf1b22d8346031e4e070cbdf65d68f->enter($__internal_f35b85ba0e1646180a9bae2f73d853a23edf1b22d8346031e4e070cbdf65d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f35b85ba0e1646180a9bae2f73d853a23edf1b22d8346031e4e070cbdf65d68f->leave($__internal_f35b85ba0e1646180a9bae2f73d853a23edf1b22d8346031e4e070cbdf65d68f_prof);

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
