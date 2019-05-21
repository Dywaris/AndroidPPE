<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_190fc1e024ff033f630558cb6439664e44a9d23e72cd4cad5c53de1e142c533a extends Twig_Template
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
        $__internal_fcb53d7138d6abd4a5600f0853e9e9373d160691d5f0a89bfcedf2823eec3b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb53d7138d6abd4a5600f0853e9e9373d160691d5f0a89bfcedf2823eec3b05->enter($__internal_fcb53d7138d6abd4a5600f0853e9e9373d160691d5f0a89bfcedf2823eec3b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_785aa41f6c3fcff73fe821ef24380353638db8c764ec7df79ab64920823aadbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785aa41f6c3fcff73fe821ef24380353638db8c764ec7df79ab64920823aadbb->enter($__internal_785aa41f6c3fcff73fe821ef24380353638db8c764ec7df79ab64920823aadbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fcb53d7138d6abd4a5600f0853e9e9373d160691d5f0a89bfcedf2823eec3b05->leave($__internal_fcb53d7138d6abd4a5600f0853e9e9373d160691d5f0a89bfcedf2823eec3b05_prof);

        
        $__internal_785aa41f6c3fcff73fe821ef24380353638db8c764ec7df79ab64920823aadbb->leave($__internal_785aa41f6c3fcff73fe821ef24380353638db8c764ec7df79ab64920823aadbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
