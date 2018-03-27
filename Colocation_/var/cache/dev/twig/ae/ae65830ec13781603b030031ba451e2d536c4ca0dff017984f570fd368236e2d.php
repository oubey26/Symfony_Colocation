<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fd32447ddb8c75f024db88761b0b61bbf64a92cbf3320c57e4281a476468b797 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70bc5612c3058b09ad3894cde6cb8101e7b4f269d0ace57d65f1115333cb4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70bc5612c3058b09ad3894cde6cb8101e7b4f269d0ace57d65f1115333cb4f1->enter($__internal_c70bc5612c3058b09ad3894cde6cb8101e7b4f269d0ace57d65f1115333cb4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e1d0f9ee57568d492cfd39300e2e0975e9b0ddb4a0c2dd11821b66a076c919a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d0f9ee57568d492cfd39300e2e0975e9b0ddb4a0c2dd11821b66a076c919a8->enter($__internal_e1d0f9ee57568d492cfd39300e2e0975e9b0ddb4a0c2dd11821b66a076c919a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c70bc5612c3058b09ad3894cde6cb8101e7b4f269d0ace57d65f1115333cb4f1->leave($__internal_c70bc5612c3058b09ad3894cde6cb8101e7b4f269d0ace57d65f1115333cb4f1_prof);

        
        $__internal_e1d0f9ee57568d492cfd39300e2e0975e9b0ddb4a0c2dd11821b66a076c919a8->leave($__internal_e1d0f9ee57568d492cfd39300e2e0975e9b0ddb4a0c2dd11821b66a076c919a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
